<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){

            if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}

			if($this->session->userdata('ci_session')){
				redirect('ajaxsearch');
			}
			else{

				$data['title'] = 'Home - B2B Exchange Module'; // Capitalize the first letter
				$data['content'] = ('pages/home');
				$this->load->view('templates/main-master', $data);
			}

		}

		public function dashboard(){
			$this->load->view('templates/header');

			$this->load->view('pages/dashboard');


			$this->load->view('templates/footer');
		}

		public function upload(){
			$config['upload_path'] = "./images/";
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload', $config);

            if($this->upload->do_upload()){
                $error = array('error' => $this->upload->display_errors());
            }
            else{
                $file_data = $this->upload->data();
                $data['img'] = base_url().'images/'.$file_data['file_name'];
                $this->load->view('success_msg', $data);
            }
		}

		public function up(){
			$config['upload_path'] = './images/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            $this->load->library('upload',$config);
			$file_data = $this->upload->data();
			$data['img'] = base_url().'images/'.$file_data['file_name'];
            $this->load->view('success_msg',$data);
		}


    }
?>