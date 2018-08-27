<?php
    class Image_model extends CI_Model{
        public function __construct(){
			parent::__construct();
			// echo "hi";
			$this->load->database();
			// echo "Try ";
        }


        function insert($data){
            $this->db->insert('images',$data['upload_data']['file_name']);
        }

        function select(){
            $query =  $this->db->get('images');
            return $query;
        }
    }
?>