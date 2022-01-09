<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function index()
	{
		$this->load->view('users/entrypage');
	}

	#Function that calls reserve.php
	public function reserve($location){
		
		$data = array();
        $data = $this->input->post();
		$data['reserveUser'] = $_SESSION['user_id'];
		$data['reserveLocation'] = $location;
		$this->load->model('select_vehicle');
		$output['car']=$this->select_vehicle->getVehicle($_SESSION['user_id']);
        if(isset($data['reservePark']) && $data['reservePark'] != null){
            $this->load->model('reservation_model');
            $this->reservation_model->createReservation($data);
			redirect(base_url(). "users/homepage");

        }

		$this->load->view('users/reserve', $output);
	}

	public function location(){

		$this->load->view('users/reservation-location');
	}


}
