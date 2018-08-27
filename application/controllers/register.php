<?php
    session_start();

    class Register extends CI_Controller{

        public function index(){
            $this->load->model('register_model');

            $this->load->helper(array('form','url'));

            $this->load->library('form_validation');

            $this->load->library('session');

            $this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_message('required', '%s is required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');
            $this->form_validation->set_message('is_unique','The %s is already taken');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[8]|matches[confirmpassword]');
            $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'required|alpha_numeric');


            if ($this->form_validation->run() == FALSE)
            {
                if (isset($this->session->userdata['ci_session'])) {
                    redirect('ajaxsearch');
                } else {
                // loading myform view to show the form
                    $data['title'] = 'Register - B2B Exchange Module';
                    $data['content'] = ('pages/register_view');
                    $this->load->view('templates/main-master', $data);
                }
            }
            else
            {
                $data = array(
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'email' => $this->input->post('email')
                );

                // inserting set data and sending that data to form_model database model
                $this->register_model->insert_form($data);

                redirect('login');

            }
            // $this->load->view('templates/footer');
        }
    }
?>