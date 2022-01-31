<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
{

	public function index()
	{
		$this->load->view('users/entrypage');
	}

	#Function that calls reserve.php
	public function reserve()
	{

		$data = array();
		$data = $this->input->post();
		$data['reserveUser'] = $_SESSION['user_id'];
		$this->load->model('select_vehicle');
		$output['car'] = $this->select_vehicle->getVehicle($_SESSION['user_id']);
		if (isset($data['reservePark']) && $data['reservePark'] != null) {
			$this->load->model('reservation_model');
			$this->reservation_model->createReservation($data);
			redirect(base_url() . "users/news");
		}

		$this->load->view('users/reserve', $output);
	}

	public function location()
	{

		$this->load->view('users/reservation-location');
	}

	public function reserveEnd()
	{
		$data = array();
		$data = $this->input->post();
		if (isset($data) && $data != null) {
			$this->load->model('reservation_model');
			$this->reservation_model->reservationstatus($data);
			redirect(base_url() . "users/parkinghistory");
		}	
		print_r ($_POST);
		$this->load->view('users/parking');
	}
}
