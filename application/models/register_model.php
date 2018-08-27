<?php
	class Register_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			// echo "hi";
			$this->load->database();
			// echo "Try ";
		}

		function insert_form($data)
		{
			$this->db->insert('users',$data);
        }


	}
?>