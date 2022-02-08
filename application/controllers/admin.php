<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');  
    }

    public function adminlogin()
	{
        $data = array();
        #Print Data
        $data = $this->input->post();
		
        if(isset($data) && $data != null){
            $this->load->model('admin_model');

            $return = $this->admin_model->login($data['adminusername'], $data['adminpassword']);
            if(is_bool($return))
			{
                echo "Login error";
            } 
			else
			{
                #print_r($return);
                $_SESSION['adminId'] = $return[0]['adminId'];
				$_SESSION['adminusername'] = $return[0]['adminusername'];
				redirect(base_url(). "admin/dashboard");
                #redirect('index.php/users/viewUser');
                
            }
        }
        $this->load->view('admin/adminlogin');
    }

   

    public function dashboard()
	{
		
		if (isset($_SESSION["adminId"])) {
      	$data['admin'] = $_SESSION['adminId'];
      	if(isset($data['admin']) && $data['admin'] != null){
		
            $this->load->model('admin_model');
			$this->load->model('reservation_model');
			$this->load->model('user_model');
			$data['reservation'] = $this->reservation_model->getRows();
			$data['users'] = $this->user_model->getRows();
			$this->load->view('admin/dashboard', $data);
			}
		}
		else 
		{
			$this->load->view('admin/adminlogin');	
		}
    	

    }


	public function getdetails($uid)
	{
		$this->load->model('user_model');
		$reslt=$this->user_model->getuserdetail($uid);
		$this->load->view('admin/edit',['row'=>$reslt]);
	}
	public function resgetdetails($ruid)
	{
		$this->load->model('reservation_model');
		$resreslt=$this->reservation_model->getresdetail($ruid);
		$this->load->view('admin/resedit',['row'=>$resreslt]);
	}

	// For data updation
	public function updatedetails()
	{
      if($this->input->post('insert'))
		{
			$usid=$this->input->post('userid');			
			$username=$this->input->post('username');			
			$user_status=$this->input->post('user_status');
			$user_firstname=$this->input->post('user_firstname');
			$user_lastname=$this->input->post('user_lastname');
			$user_cpnumber=$this->input->post('user_cpnumber');
			$user_email=$this->input->post('user_email');
			$this->load->model('user_model');
			$this->user_model->updatedetails
			(
				$usid,$username,$user_status,$user_firstname,$user_lastname,$user_cpnumber,$user_email
			);
		} 
		else 
		{
	        $this->session->set_flashdata('error', 'Wrong input !!');
		    // redirect('admin/dashboard');
        }
    }
	


	public function resupdatedetails()
	{
      if($this->input->post('insert'))
		{
			$resid=$this->input->post('reid');			
			$reserveStatus=$this->input->post('reserveStatus');
			$this->load->model('reservation_model');
			$this->reservation_model->resupdatedetails
			(
				$resid,$reserveStatus
			);		
		} 
		else 
		{
	        $this->session->set_flashdata('error', 'try again');
		    redirect('admin/dashboard');
        }
    }
	
	
}
?>

