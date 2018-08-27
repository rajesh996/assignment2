<?php
    class User_model extends CI_Model{

        public function __construct(){
			parent::__construct();
			// echo "hi";
			$this->load->database();
			// echo "Try ";
		}

        function userdata($username)
        {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where("username = '".$username."'");
            $query = $this->db->get();

            return $query;
        }

        function confirm($data)
        {
            $this->db->where('username',$data['username']);
            $this->db->where('password',$data['password']);
            // $this->db->limit(1);
            $query = $this->db->get('users');

            if ($query->num_rows() > 0) {
                return true;
            }
            else {
                return false;
            }

        }

        function update($data,$username)
        {
            $this->db->where('username',$username);
            $this->db->update('users',$data);

        }

    }
?>