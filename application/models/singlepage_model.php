<?php
	class Singlepage_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			// echo "hi";
			$this->load->database();
			// echo "Try ";
		}

		public function select($id){
			// $condition = "userid = " . "'".$id."'";
            $this->db->select('*');
            $this->db->from('startups');
            $this->db->where("businessid = "."'".$id."'");
            // $this->db->limit(1);
            $query = $this->db->get();
            // $query = $this->db->get('startups');
            return $query;
		}
	}
?>