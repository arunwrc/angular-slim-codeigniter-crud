<?php

class Customer_model extends CI_Model {

    public function get_details(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get('customers'); 
		return $query->result();
    }
    

}