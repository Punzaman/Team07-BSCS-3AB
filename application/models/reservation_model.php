<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reservation_model extends CI_Model
{

	private $table = "reservation";

	public function __construct()
	{
		parent::__construct();
	}

	public function createReservation($data){

        if(isset($data['reservePark']) && $data['reservePark'] != null){
            if(empty($data['reserveVehicle'])){
                echo "No vehicle yet. Pls add vehicle before reserving";
                return;
            }
            else{
            $this->db->insert($this->table, $data);
            redirect(base_url().'users/news');
        }
        }
        print_r($data);
    }

	public function getRows($reserveId = '')
	{
		$this->db->select('
		reserveId,reserveStatus,reserveDate,
		reserveUser,reservePark,reserveVehicle,reserveLocation
		');
		$this->db->from($this->table);
		if ($reserveId) {
			$this->db->where('reserveId', $reserveId);
			$query = $this->db->get();
			$result = $query->row_array();
		} else {
			$query = $this->db->get();
			$result = $query->result_array();
		}
		return !empty($result) ? $result : false;
	}

	public function resupdatedetails(
		$resid,
		$reserveStatus
	) {
		$data = array(
			'reserveStatus' => $reserveStatus
		);

		$sql_query = $this->db->where('reserveId', $resid)
			->update('reservation', $data);

		if ($sql_query) {
			$this->session->set_flashdata('success', 'Record updated successful');
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
			redirect('admin/dashboard');
		}
	}

	public function getresdetail($ruid)
	{
		$resret = $this->db->select(
			'reserveId,reserveStatus'
		)
			->where('reserveId', $ruid)
			->get($this->table);
		return $resret->row();
	}

	public function reserveclose($id)
	{
		$data = array();
		$data = $this->input->post();
		$this->db->where('reserveId', $id);
		$data['reserveStatus'] = 'Closed';
		$data['reserveEnd'] = strtotime("now");
		$this->db->update($this->table, $data);
	}
}
