<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Select_user extends CI_Model {
    private $table = "users";

    public function select_user()
      {
         //data is retrive from this query
         $query = $this->db->get('users');
         return $query;
      } 
}