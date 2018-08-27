<?php
	class Form_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			// echo "hi";
			$this->load->database();
			// echo "Try ";
		}

		function insert_form($data)
		{
			$this->db->insert('startups',$data);
        }

        function select(){
            $query = $this->db->get('startups');
            return $query;
		}

		function selectsingle($businessid){
			$condition = "business =" . "'" . $businessid . "'";
			$this->db->select('userid');
            $this->db->from('startups');
            $this->db->where($condition);
			$query = $this->db->get();
			return $query->result();
		}


		function update($data, $businessid){
			// $condition = "userid = "."'" . $userid . "'";
			$this->db->where('businessid', $businessid);
			$this->db->update('startups', $data);
		}

		function fetch_data($query)
		{
			$this->db->select("*");
			$this->db->from("startups");
			if($query != '')
			{
				$this->db->like('business_name', $query);
				//    $this->db->or_like('description', $query);
				$this->db->or_like('industry', $query);
				$this->db->or_like('founder_name', $query);
				$this->db->or_like('established_year', $query);
			}
			// $this->db->order_by('userid', 'ASC');
			return $this->db->get();
		}



	}
?>