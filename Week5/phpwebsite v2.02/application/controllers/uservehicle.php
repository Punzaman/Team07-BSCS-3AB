<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uservehicle extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function addvehicle(){

			$data = array();
			$data = $this->input->post();
			$data['user_account'] = $_SESSION['user_id'];
			if(isset($data['vehicle_type']) && $data['vehicle_type'] != null){
				$this->load->model('uservehicle_model');
				$this->uservehicle_model->addVehicle($data);
				redirect(base_url(). "users/homepage");
	
			}
        $this->load->view('users/addvehicle');
    }
}
