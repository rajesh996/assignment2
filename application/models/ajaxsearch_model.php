<?php
class Ajaxsearch_model extends CI_Model
{
    function fetch_data($query)
    {
        $this->db->select("*");
        $this->db->from("startups");
        if($query != '')
        {
            $this->db->like('business_name', $query);
            $this->db->or_like('city', $query);
            $this->db->or_like('country',$query);
            $this->db->or_like('industry', $query);
            $this->db->or_like('founder_name', $query);
            $this->db->or_like('established_year', $query);
        }
        $this->db->order_by('time', 'DESC');
        $result =  $this->db->get();

        return $result->result();
    }
}
?>
