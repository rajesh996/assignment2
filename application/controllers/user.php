<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class User extends CI_Controller{

        public function construct()
        {
            parent::_construct();
        }

        public function profile()
        {
            if (isset($this->session->userdata['ci_session'])) {

                $this->load->model('user_model');

                $username = $this->uri->segment(3);

                $output['y'] = $this->user_model->userdata($username);

                $output['content'] = 'pages/user_view';

                $this->load->view('templates/master', $output);
            }
            else{
                redirect('login');
            }
        }


        public function confirm(){
            if (isset($this->session->userdata['ci_session'])) {
                $this->load->view('pages/body_header_view');

                $this->load->view('templates/dashboard_header');

                $this->load->model('user_model');

                $username = $this->uri->segment(3);

                $this->load->helper(array('form','url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('password', 'Password','required');
                $this->form_validation->set_message('required','%s is required');

                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('pages/password_confirm');
                }
                else
                {
                    $data = array(
                        'username' => $username,
                        'password' => md5($this->input->post('password'))
                    );

                    $result = $this->user_model->confirm($data);
                    if($result == true){
                        redirect('user/edit/'.$username);
                    }
                    else{
                        $data = array(
                            'error_message' => 'Entered wrong Password',
                        );
                        $this->load->view('pages/password_confirm', $data);
                    }
                }

            }
            else{
                redirect('login');
            }
        }


        public function edit(){
            if (isset($this->session->userdata['ci_session'])) {
                $this->load->view('pages/body_header_view');

                $this->load->view('templates/dashboard_header');

                $this->load->model('user_model');

                $username = $this->uri->segment(3);


                $this->load->helper(array('form','url'));


                $this->load->library('form_validation');

                $this->form_validation->set_rules('firstname', 'First Name', 'required');
                $this->form_validation->set_message('required', '%s is required');
                $this->form_validation->set_rules('lastname', 'Last Name', 'required');
                $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');
                $this->form_validation->set_message('is_unique','The %s is already taken');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('pages/user_edit');
                }
                else
                {
                    $data = array(
                        'firstname' => $this->input->post('firstname'),
                        'lastname' => $this->input->post('lastname'),
                        'username' => $this->input->post('username'),
                        'email' => $this->input->post('email')
                    );

                    $this->user_model->update($data, $username);

                    redirect('ajaxsearch');
                }
                $this->load->view('templates/footer');
            }
            else{
                redirect('login');
            }

        }

    }
?>
