<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	#Function that calls signup.php
	
	public function signup(){
        $data = array();
        $data = $this->input->post();
        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $this->user_model->createUser($data);
			redirect(base_url());

        }
		$this->load->view('users/signup');
    }

	#Function that calls login.php

	public function login(){
		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null){
			$this->load->model('user_model');
			$return = $this->user_model->loginUser($data['username'], $data['user_pwd']);

			if(is_bool($return)){
				echo "login error";
			}
			else{
				$_SESSION['user_id'] = $return[0]['user_id'];
				$_SESSION['username'] = $return[0]['username'];
				$_SESSION['user_firstname'] = $return[0]['user_firstname'];
				$_SESSION['user_lastname'] = $return[0]['user_lastname'];
				$_SESSION['user_email'] = $return[0]['user_email'];
				redirect(base_url(). "users/homepage");
			}
		}
		
		$this->load->view('users/login');
	}

	public function logout(){
        session_destroy();
        redirect(base_url());
    }

	#Function that calls profile.php
	public function entrypage(){

		$this->load->view('users/entrypage');
	}

	#Function that calls homepage.php
	public function homepage(){

		$this->load->view('users/homepage');
	}

	#Function that calls profile.php
	public function profile(){

		$this->load->view('users/profile');
	}

	
}

	