<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class uservehicle_model extends CI_Model {

	private $table = "uservehicle";

	public function __construct(){
		parent::__construct();
	}

    public function addVehicle($data){

		if(isset($data['vehicle_type']) && $data['vehicle_type'] != null){
			$this->db->insert($this->table, $data);
		}
        
        print_r($data);
    }
}