<?php

class Airport_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    function airport_get_list() {
        $this->db->order_by('name');
        $result = $this->db->get('airports')->result();
        return $result;
    }


    function get_flights_in_trip($trip_id) {
        $this->db->where('trip_id',$trip_id);
        $this->db->where('deleted',0);
        $result = $this->db->get('flights')->result();
        return $result;
    }

    function add_flight_to_trip($data) {
        if($this->db->insert('flights',$data)){
            $message = array('message'=> 'Flight Added Successfully');
            return $message;
        } else {
            $message = array('message' => 'Unable to add flight');
            return $message;
        }
    }


    function remove_flight_from_trip($flight_id,$data) {
        $this->db->where('id',$flight_id);
        if($this->db->update('flights',$data)){
            $message = array('message'=> 'Flight Removed Successfully');
            return $message;
        } else {
            $message = array('message' => 'Unable to remove flight');
            return $message;
        }
    }

     function rename_trip($trip_id,$data) {
        $this->db->where('id',$trip_id);
        if($this->db->update('trip',$data)){
            $message = array('message'=> 'Trip renamed Successfully','trip_id'=> $trip_id);
            return $message;
        } else {
            $message = array('message' => 'Unable to rename trip','trip_id'=> $trip_id);
            return $message;
        }
    }

    public function response_json($data){
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }


}
