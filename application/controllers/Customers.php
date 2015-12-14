<?php
 class Customers extends CI_Controller {

     function index() {
		$this->load->model('Customer_model'); 
		$list = $this->Customer_model->get_details(); 
        $this->load->library('user_agent');
		$data['Title']="List Customers";
		$data['Operation_system'] = $this->agent->platform();
		$data['Browser'] = $this->agent->browser();
		$data['Ip_address'] = $_SERVER['REMOTE_ADDR'];
        //print_r($list); exit;
		echo json_encode($list);


     }
	 

	 
 }
?>