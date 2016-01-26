<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airports extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function airports_list()
	{
		$airport_list = $this->airport_model->airport_get_list();
		if($airport_list){
			$this->airport_model->response_json($airport_list);
		}else{
			$message = array('message'=> 'No records found');
			$this->airport_model->response_json($message);
		}
	}

	public function flight_list()
	{
		$trip_id = isset($_REQUEST['trip_id']) ? $_REQUEST['trip_id'] : false;

		if($trip_id){
			$flight_list = $this->airport_model->get_flights_in_trip($trip_id);
			if($flight_list){
				$this->airport_model->response_json($flight_list);
			}else {
				$message = array('message'=> 'No record found');
				$this->airport_model->response_json($message);
			}
		} else {
			$message = array('message'=> 'Invalid trip id');
			$this->airport_model->response_json($message);
		}

	}

	public function add_flight()
	{
		$from_id = isset($_REQUEST['from_id']) ? $_REQUEST['from_id'] : false;
		$to_id = isset($_REQUEST['to_id']) ? $_REQUEST['to_id'] : false;
		$trip_id = isset($_REQUEST['trip_id']) ? $_REQUEST['trip_id'] : false;

		if($from_id && $to_id && $trip_id){
			$data = array(
				'from_id' => $from_id,
				'to_id' => $to_id,
				'trip_id' => $trip_id
			);

			$result = 	$this->airport_model->add_flight_to_trip($data);
	        $this->airport_model->response_json($result);
        } else {
			$message = array('message'=> 'Invalid data');
			$this->airport_model->response_json($message);
		}

	}

	public function remove_flight()
	{
		$flight_id = isset($_REQUEST['flight_id']) ? $_REQUEST['flight_id'] : false;

		if($flight_id){
			$data = array(
				'deleted' => 1
			);

			$result = 	$this->airport_model->remove_flight_from_trip($flight_id,$data);
	       	$this->airport_model->response_json($result);
    	} else {
			$message = array('message'=> 'Invalid data');
			$this->airport_model->response_json($message);
		}

	}

	public function rename_trip()
	{
		$trip_id = isset($_REQUEST['trip_id']) ? $_REQUEST['trip_id'] : false;	
		$trip_name = isset($_REQUEST['trip_name']) ? $_REQUEST['trip_name'] : false;

		if($trip_id && $trip_name){

			$data = array(
				'name' => $trip_name
			);

			$result = 	$this->airport_model->rename_trip($trip_id,$data);
	        $this->airport_model->response_json($result);
	    } else {
			$message = array('message'=> 'Invalid data');
			$this->airport_model->response_json($message);
	    }
	}

}
