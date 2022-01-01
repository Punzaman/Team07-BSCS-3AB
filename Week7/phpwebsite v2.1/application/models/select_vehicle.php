<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Select_vehicle extends CI_Model {
    private $table = "uservehicle";

    public function select_vehicle($userid=null)
      {
         if(isset($userid) && $userid != null){

            $this->db->where('user_account', $userid);

        }
         //data is retrive from this query
         $query = $this->db->get('uservehicle');
         return $query->result_array();
      } 
}