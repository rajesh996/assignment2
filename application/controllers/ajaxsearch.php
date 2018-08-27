<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {


    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Startups Dashboard';
        $data['content'] = 'pages/searchhome';
        $this->load->view('templates/master', $data);
    }

    public function fetch()
    {
        if($this->session->userdata('ci_session')){

            $this->load->library('pagination');

            $config['base_url'] = base_url().'singlepage/search';
            $config['total_rows'] = 50;
            $config['per_page'] = 10;

            $this->pagination->initialize($config);

            $output = '';
            $query = '';
            $this->load->model('ajaxsearch_model');
            if($this->input->post('query'))
            {
                $query = $this->input->post('query');
            }
            $data['h'] = $this->ajaxsearch_model->fetch_data($query);

            $this->load->view('ajaxsearch', $data);
        }
        else{
            redirect('login');
        }
    }
}
?>
