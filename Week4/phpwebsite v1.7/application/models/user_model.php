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
			echo "pwdMatch";
			return;
		}
		else{
			
			$data['user_pwd'] = md5($data['user_pwd']);
			unset($data['user_pwdrepeat']);
			$this->db->insert($this->table, $data);

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
			->where('user_pwd', md5($pwd))
			->or_where('user_email', $username)
			->where('user_pwd', md5($pwd));

		$query = $this->db->get($this->table);

		$return = $query->result_array();
		
		if(count($return) !== 0){
			return $return;
		}
		return false;
	}

}