<?php
session_start();

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->model('login_model');

        $this->load->helper(array('form', 'url'));

        // $this->load->view('templates/header');

        $this->load->library('form_validation');

        $this->load->library('session');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');

        if ($this->form_validation->run() == false) {
            if (isset($this->session->userdata['ci_session'])) {
                redirect('ajaxsearch');
            } else {
                $data['title'] = "Login - B2B Exchange Module";
                $data['content'] = 'pages/login_view';
                $this->load->view('templates/main-master', $data);
                // $this->load->view('pages/login_view');
            }
        } else {

            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
            );
            $result = $this->login_model->login($data);
            if ($result == true) {
                $username = $this->input->post('username');
                $result = $this->login_model->user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result->username,
                        'userid' => $result->userid
                    );
                    $this->session->set_userdata('ci_session', $session_data);
                    redirect('ajaxsearch');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password',
                );
                $this->load->view('pages/login_view', $data);
            }

        }
    }

    function fblogin(){

        $fb = new Facebook\Facebook([
              'app_id' => '444583216053575',
              'app_secret' => 'ab06849a90e986f42550dff643d2a8b4',
              'default_graph_version' => 'v3.1',
            ]);

       $helper = $fb->getRedirectLoginHelper();

       $permissions = ['email'];

       $loginUrl = $helper->getLoginUrl('http://localhost/assignment2/login/fbcallback', $permissions);

    }

    public function logout()
    {

        // Removing session data
        $sess_array = array(
            'username' => '',
        );
        $this->session->unset_userdata('ci_session');
        $this->index();
        // $data['message_display'] = 'Successfully Logout';
        redirect('login');
        // $this->load->view('pages/login_view', $data);
    }

}
