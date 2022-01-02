<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uservehicle extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
