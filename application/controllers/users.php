<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

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
		$this->load->view('users/index');
	}

	#Function that calls signup.php

	public function signup()
	{
		$data = array();
		$data = $this->input->post();
		if (isset($data) && $data != null) {
			$this->load->model('user_model');
			$this->user_model->createUser($data);
			redirect(base_url());
		}
		$this->load->view('users/signup');
	}

	#Function that calls login.php

	public function login()
	{
		$data = array();
		$data = $this->input->post();
		if (isset($data) && $data != null) {
			$this->load->model('user_model');
			$return = $this->user_model->loginUser($data['username'], $data['user_pwd']);

			if (is_bool($return)) {
				echo "login error";
			} else {
				$_SESSION['user_id'] = $return[0]['user_id'];
				$_SESSION['username'] = $return[0]['username'];
				$_SESSION['user_firstname'] = $return[0]['user_firstname'];
				$_SESSION['user_lastname'] = $return[0]['user_lastname'];
				$_SESSION['user_email'] = $return[0]['user_email'];
				$_SESSION['user_cpnumber'] = $return[0]['user_cpnumber'];
				$_SESSION['user_address'] = $return[0]['user_address'];
				redirect(base_url() . "users/news");
			}
		}

		$this->load->view('users/login');
	}

	public function parking($id = null)
	{
		//load the database
		$this->load->database();
		//load the model
		$this->load->model('select_vehicle');
		$this->load->model('select_reservation');
		$reserve = $this->select_reservation->getReservation($_SESSION['user_id']);
		$vehicle = array();
		$try = array();
		$i = 0;
		//pangkuha ng vehivle bawat reservation
		foreach ($reserve as $r) {
			$try[] = $this->select_vehicle->getVehicle(NULL, $r['reserveVehicle']);
			$vehicle[$i] = $try[$i][0];
			$i++;
		}
		$i = 0;
		//pang merge ng nakuhang vehicle sa reservation details
		foreach ($reserve as $r) {
			$output['result'][$i] = array_merge($reserve[$i], $vehicle[$i]);
			$i++;
		}
		//return the data in view
		$this->load->view('users/parking', $output);
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

	#Function that calls profile.php
	public function entrypage()
	{

		$this->load->view('users/entrypage');
	}

	public function about()
	{

		$this->load->view('users/about');
	}

	public function contacts()
	{

		$this->load->view('users/contacts');
	}

	#Function that calls homepage.php
	public function news()
	{

		$this->load->view('users/news');
	}

	#Function that calls profile.php
	public function profile()
	{

		$this->load->view('users/profile');
	}

	public function members()
	{

		$this->load->view('users/members');
	}

	public function settings()
	{

		$this->load->view('users/settings');
	}

	public function logoutpage()
	{

		$this->load->view('users/logoutpage');
	}

	public function logoutpageconfirm()
	{

		$this->load->view('users/logoutpageconfirm');
	}

	public function notifications()
	{

		$this->load->view('users/notifications');
	}

	public function privacy()
	{

		$this->load->view('users/privacy');
	}

	public function deactivate()
	{
		$data = array();
		$data = $this->input->post();
		if (isset($data) && $data != null) {
			$this->load->model('user_model');
			$return = $this->user_model->deleteAccount($data['user_pwdrepeat'], $data['user_id']);

			if ($return == true) {
				session_unset('user_id');
				session_unset('username');
				session_destroy();
				redirect(base_url());
			} else {
				echo "WRONG PASSWORD";
			}
		}
		$this->load->view('users/deactivate');
	}

	public function update()
	{
		$this->load->model('user_model');
		$user = $this->user_model->getUser($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();

		if (isset($data) && $data != null) {
			$this->load->model('user_model');
			$this->user_model->updateUser($data);
		}
		$this->load->view('users/update', $output);
	}

	public function parkinghistory($id = null)
	{
		//load the database
		$this->load->database();
		//load the model
		$this->load->model('select_vehicle');
		$this->load->model('select_reservation');
		$reserve = $this->select_reservation->getReservation($_SESSION['user_id']);
		$vehicle = array();
		$try = array();
		$i = 0;
		//pangkuha ng vehivle bawat reservation
		foreach ($reserve as $r) {
			$try[] = $this->select_vehicle->getVehicle(NULL, $r['reserveVehicle']);
			$vehicle[$i] = $try[$i][0];
			$i++;
		}
		$i = 0;
		//pang merge ng nakuhang vehicle sa reservation details
		foreach ($reserve as $r) {
			$output['result'][$i] = array_merge($reserve[$i], $vehicle[$i]);
			$i++;
		}
		//return the data in view
		$this->load->view('users/parkinghistory', $output);
	}
}
