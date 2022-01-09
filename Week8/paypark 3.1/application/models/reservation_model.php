<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation_model extends CI_Model {

	private $table = "reservation";

	public function __construct(){
		parent::__construct();
	}

    public function createReservation($data){

        if(isset($data['reservePark']) && $data['reservePark'] != null){
			$this->db->insert($this->table, $data);
		}
        
        
        print_r($data);
    }

	public function location(){}
}
    