<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

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
			$userdata = $this->user_model->createUser($data);
			$user = $this->user_model->getUser($userdata);
			$_SESSION['user'] = $user[0];
			if (is_int($userdata)) {
				redirect('users/sendEmail/' . $userdata);
			} 
			echo "error";
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
				echo "Login error. Passsword or Username incorrect.";
			} else {
				$_SESSION['user_id'] = $return[0]['user_id'];
				$_SESSION['username'] = $return[0]['username'];
				$_SESSION['user_firstname'] = $return[0]['user_firstname'];
				$_SESSION['user_lastname'] = $return[0]['user_lastname'];
				$_SESSION['user_email'] = $return[0]['user_email'];
				$_SESSION['user_cpnumber'] = $return[0]['user_cpnumber'];
				$_SESSION['user_address'] = $return[0]['user_address'];
				$_SESSION['user_gender'] = $return[0]['user_gender'];
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
		if (isset($output) != null) {
			$this->load->view('users/parking', $output);
		} else {
			$this->load->view('users/parking');
		}
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
	
		$this->load->view('users/profile', $output);
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

	public function privacy(){
		$this->load->model('user_model');
		$user = $this->user_model->getUser($_SESSION['user_id']);
			 
		$output['user'] = $user[0];
		
		$data = array();
		$data = $this->input->post();

		if(isset($data) && $data != null){
			$this->load->model('user_model');
			$this->user_model->updateUserpw($data);

		}
		$this->load->view('users/privacy', $output);
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
		//$this->load->view('users/parkinghistory', $output);
		if (isset($output) != null) {
			$this->load->view('users/parkinghistory', $output);
		} else {
			$this->load->view('users/parkinghistory');
		}
	}

	public function sendEmail($id = null)
	{
		$email['protocol'] = 'smtp';
		$email['smtp_host'] = 'smtp.gmail.com';
		$email['smtp_user'] = "softwareone40@gmail.com";
		$email['smtp_pass'] = 'pcfwlxkuaxjmppuc';
		$email['smtp_port'] = '587';
		$email['smtp_crypto'] = 'tls';

		$this->load->library('email', $email);

		$this->email->set_newline("\r\n");

		$this->load->model('user_model');
		$user = $this->user_model->getUser($id);

		$email = $user[0]['user_email'];

		$this->email->set_mailtype('html');
		$this->email->subject('Account Verification');
		$this->email->to($email);
		$this->email->from('softwareone40@gmail.com');
		$this->email->message('Your PayPark account has been successfully created! Please <strong> <a href="' . base_url() . 'users/index/' . $email . '/' . '">click here</a></strong> to activate your account');
		$this->email->send();
		/* echo $this->email->print_debugger(); */
		
		echo '<script>
		alert("Please verify your account in your email");
		window.location.href="http://localhost/paypark";
		</script>';
		/* redirect('users/verifyemail/'); */
		
	}

}
