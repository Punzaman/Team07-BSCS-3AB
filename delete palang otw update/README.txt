####### For account deactivation

####### Insert the SQL FILE to ur database. Changes made: added column for user_status(Active/Inactive) 

######(ADD THESE FUNCTIONS TO)CONTROLLERS>users.php
	public function account_settings(){
		$this->load->view('users/account_settings');
	}

	public function account_delete_confirm(){
		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null){
			$this->load->model('user_model');
			$return = $this->user_model->deleteAccount($data['user_pwdrepeat'], $data['user_id']);

			if($return == true){
				session_unset('user_id');
				session_unset('username');
				session_destroy();
				redirect(base_url());
			}
			else{
				echo "WRONG PASSWORD! TRY AGAIN";
			}
		}

		$this->load->view('users/account_confirm_delete');
	}

#####(ADD THESE FUNCTIONS TO)user_model.php
	public function deleteAccount($password_repeat, $id){
		if($this->verify_password($password_repeat, $id)){
			return false;
		}
		else{
			$this->db->where('user_id', $id);
			$data['user_status'] = 'Inactive';
			$this->db->update($this->table, $data);
			return true;
		}
	}
	
		public function pwdMatch($password, $password_repeat){
		if($password !== $password_repeat){
			return true;
		}
		else{
			return false;
		}
	}

	public function verify_password($password_repeat, $id){
		$this->db->where('user_id', $id);

		$query = $this->db->get($this->table);
		/* echo $this->db->last_query(); */

		$return = $query->result_array();
		if($this->pwdMatch($return[0]['user_pwd'], md5($password_repeat))){
			return true;
		}
		else{
			return false;
		}
	}
######## user_model.php > sa loginUser function, edit ONE line#################################################
	from 
		if(count($return) !== 0){
	to 
		if(count($return) !== 0 && $return[0]['user_status'] == 'Active'){

####### INSERT THE FF FILES:
VIEWS>USERS>account_settings.php
VIEW>USERS>account_delete_confirm.php


