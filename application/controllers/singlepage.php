<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Singlepage extends CI_Controller{

		public function index(){
			if(!$this->session->userdata('ci_session')){

				redirect('login');

			}
		}

		public function search(){

			if($this->session->userdata('ci_session')){

				$this->load->model('singlepage_model');

				$id = $this->uri->segment(3);

				$output['title'] = 'Business details - B2B Exchange Module';
				$output['y'] = $this->singlepage_model->select($id);

				$output['content'] = 'pages/singlepage_view';

				$this->load->view('templates/master', $output);

			}

			else{
				redirect('login');
			}
		}

		public function edit(){
			if($this->session->userdata('ci_session')){

				$this->load->model('singlepage_model');

				$id = $this->uri->segment(3);

				$output['title'] = 'Edit Business Details - B2B Exchange Module';

				$output['y'] = $this->singlepage_model->select($id);

				$output['content'] = 'pages/edit_form';

				$this->load->view('templates/master', $output);

			}
			else{
				redirect('login');
			}

		}
	}
?>