<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Select_reservation extends CI_Model {
    private $table = "reservation";

    public function select_reservation($userid=null)
      {
         if(isset($userid) && $userid != null){

            $this->db->where('reserveUser', $userid);

        }
         //data is retrive from this query
         $query = $this->db->get('reservation');
         return $query->result_array();

      
      } 
}