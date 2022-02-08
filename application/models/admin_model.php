<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    private $table = "admin";

    public function __construct(){
        parent::__construct();
    }
     public function login($adminusername, $adminpassword){
        $this->db->where('adminusername', $adminusername)
                ->where('adminpassword', $adminpassword);

        $query = $this->db->get($this->table);
//        echo $this->db->last_query(). '<br>';

        $return = $query->result_array();

        if(count($return) > 0){
            return $return;
        }
        return false;
    }

    public function getUsers($adminId = null){
        if(isset($adminId) && $adminId != null){
            $this->db->where('adminId', $adminId);
        }
        $query = $this->db->get($this->table);

        #Test if get is working
        //echo $this->db->last_query(). '<br>'; 

        return $query->result_array();
   
        }

}