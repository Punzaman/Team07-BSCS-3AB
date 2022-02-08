<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	private $table = "users";

	public function __construct(){
		parent::__construct();
	}

    public function createUser($data){
		
		if($this->usernameExist($data['username'])){
			echo "usernameExist";
			return;
		}
		else if($this->emailExist($data['user_email'])){
			echo "emailExist";
			return;
		}
		else if($this->pwdMatch($data['user_pwd'], $data['user_pwdrepeat'])){
			echo "Passwords don't match. Please try again ";
			return;
		}
		else{
			
			$data['user_pwd'] = sha1($data['user_pwd']);
			unset($data['user_pwdrepeat']);
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();
		}
	}

	public function usernameExist($username){
		if(isset($username) && $username != null){
			$this->db->where('username', $username);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0){
			return true;
		}

		return false;
	}

	public function emailExist($email){
		if(isset($email) && $email != null){
			$this->db->where('user_email', $email);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0){
			return true;
		}

		return false;
	}

	public function pwdMatch($password, $password_repeat){
		if($password !== $password_repeat){
			return true;
		}
		else{
			return false;
		}
	}

	public function loginUser($username, $pwd){
		$this->db->where('username', $username)
			->where('user_pwd', sha1($pwd))
			->or_where('user_email', $username)
			->where('user_pwd', sha1($pwd));

		$query = $this->db->get($this->table);

		$return = $query->result_array();
		
		if(count($return) !== 0 && $return[0]['user_status'] != 'Inactive'){
			return $return;
		}
		return false;
	}

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
	
	/*checks if the passwords match*/
	public function verify_password($password_repeat, $id){
		$this->db->where('user_id', $id);

		$query = $this->db->get($this->table);
		/* echo $this->db->last_query(); */

		$return = $query->result_array();
		if($this->pwdMatch($return[0]['user_pwd'], sha1($password_repeat))){
			return true;
		}
		else{
			return false;
		}
	}

	public function updateUser($data){
		
		if($this->update_emailExist($data['user_email'], $data['user_id'])){
			echo "Error: Email Already Exists";
			return;
		}
		else if($this->update_usernameExist($data['username'], $data['user_id'])){
			echo "Error: Username Already Exists";
			return;
		}
		else{
			$this->db->where('user_id', $data['user_id']);
			unset($data['user_id']);
			$this->db->update($this->table, $data);	
			echo "Changes saved! Changes made will reflect upon logging in again.";

		}
	}
	

	public function update_usernameExist($username, $id){
		if(isset($username) && $username != null){
			$this->db->where('username', $username);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0 && $id != $return[0]['user_id']){
			return true;
		}

		return false;
	}

	public function update_emailExist($email, $id){
		if(isset($email) && $email != null){
			$this->db->where('user_email', $email);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0 && $id != $return[0]['user_id']){
			return true;
		}

		return false;
	}	

	public function getUser($id = null){
		if(isset($id) && $id != null){
			$this->db->where('user_id', $id);
		}

		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function getRows($id = '')
		{ 
			$this->db->select('
			user_id, username, user_status,user_firstname,user_lastname,
			user_cpnumber,user_email
			'); 
			$this->db->from($this->table); 
			if($id)
			{ 
				$this->db->where('user_id',$id); 
				$query = $this->db->get(); 
				$result = $query->row_array(); 
			}
			else
			{ 
				$query = $this->db->get(); 
				$result = $query->result_array(); 
			} 
			return !empty($result)?$result:false; 
    	} 
	
		public function updatedetails(
			$usid,$username,$user_status,$user_firstname,$user_lastname,
			$user_cpnumber,$user_email
			)
	    {
			$data=array(

						'username'=>$username,
						'user_status'=>$user_status,
						'user_firstname'=>$user_firstname,
						'user_lastname'=>$user_lastname,
						'user_cpnumber'=>$user_cpnumber,
						'user_email'=>$user_email,
						
					);
			
				$sql_query=$this->db->where('user_id', $usid)
							->update('users', $data); 

				if($sql_query)
				{
					$this->session->set_flashdata('success', 'Record updated successful');
					redirect('admin/dashboard');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('admin/dashboard');
				}
		
		}
		public function getuserdetail($uid)
		{
			$ret=$this->db->select
			(
			'user_id,username,user_status,user_firstname,user_lastname,
			user_cpnumber,user_email'
			)
			->where('user_id',$uid)
			->get($this->table);
			return $ret->row();    
		}
		
		public function updateUserpw($data)
		{

		if($this->pwdMatch($data['user_pwd'], $data['user_pwdrepeat']))
			{
				echo "pwd does not match";
				return;
			}
			else if(empty($data['user_pwd'])){
				echo "no pwd entered";
				return;
			}
			else
			{
				
				$this->db->where('user_id', $data['user_id']);
				unset($data['user_id']);
				unset($data['user_pwdrepeat']);
				$data['user_pwd'] = sha1($data['user_pwd']);

				$this->db->update($this->table, $data);	
				echo "PASSWORD CHANGED SUCCESSFULLY!";

			}
		}
}