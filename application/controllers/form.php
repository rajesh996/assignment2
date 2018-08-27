
<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Form extends CI_Controller{

        public function index(){

            $this->load->library('image_lib');

            $this->load->model('form_model');

            $this->load->helper(array('form','url'));


            $config['upload_path']          = './images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;

            $this->load->library('upload', $config);


            if ( ! $this->upload->do_upload('logo'))
            {
                $error = array('error' => $this->upload->display_errors());

                $logo_name = 'placeholder-image1';

                // $this->load->view('upload_form', $error);
            }
            else
            {
                $logo_data = array('upload_data' => $this->upload->data());
                $logo_name = $logo_data['upload_data']['file_name'];
            }

            $config['image_library'] = 'gd2';
            $config[] = base_url().'images/'.$logo_name;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 150;
            $config['height']       = 100;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();


            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('founderimage'))
            {
                $error = array('error' => $this->upload->display_errors());

                $founder_image_name = 'blank-image-person';
            }
            else
            {
                $founder_image_data = array('upload_data' => $this->upload->data());
                $founder_image_name = $founder_image_data['upload_data']['file_name'];
                $founder_image_path = $founder_image_data['upload_data']['full_path'];
            }

            $config['image_library'] = 'gd2';
            $config[] = base_url().'images/'.$founder_image_name;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 150;
            $config['height']       = 100;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();


            $this->load->library('form_validation');


            //setting validation rules for input entered in form
            $this->form_validation->set_rules('businessname', 'Business Name', 'required');
            $this->form_validation->set_rules('description', ' Description', 'required|min_length[50]|max_length[80]');
            $this->form_validation->set_rules('industry', 'Industry', 'required');
            $this->form_validation->set_rules('contact', 'Contact', 'required|numeric|exact_length[10]');
            $this->form_validation->set_rules('twitter', 'Twitter', '');
            $this->form_validation->set_rules('linkedin', 'LinkedIn Profile URL', 'required');
            $this->form_validation->set_rules('facebookpage', 'Facebook Page','');
            $this->form_validation->set_rules('instagram', 'Instagram Page','');
            $this->form_validation->set_rules('website', 'Website URL','');
            $this->form_validation->set_rules('email', 'Email Id','required|valid_email');
            $this->form_validation->set_rules('city', 'City','required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('logo', 'Business Logo', '');
            $this->form_validation->set_rules('year', 'Established Year', 'required|numeric');
            $this->form_validation->set_rules('products', 'Products/serices', 'required');
            $this->form_validation->set_rules('founder', 'Founder Name', 'required');
            $this->form_validation->set_rules('designation', 'Designation', 'required');
            $this->form_validation->set_rules('batchlabel', 'Batch', 'required|numeric');
            $this->form_validation->set_rules('founderimage', 'Founder Image', '');

            if ($this->form_validation->run() == FALSE)
            {
                $data['title'] = 'Business Form - B2B Exchange Module';
                $data['content'] = 'form_view';
                $this->load->view('templates/master', $data);
                // $this->load->view('form_view');
            }
            else
            {

                $data = array(
                    'business_name' => $this->input->post('businessname'),
                    'description' => $this->input->post('description'),
                    'industry' => $this->input->post('industry'),
                    'contact' => $this->input->post('contact'),
                    'twitter' => $this->input->post('twitter'),
                    'linkedin' => $this->input->post('linkedin'),
                    'facebook_page' => $this->input->post('facebookpage'),
                    'instagram' => $this->input->post('instagram'),
                    'website' => $this->input->post('website'),
                    'email' => $this->input->post('email'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'country' => $this->input->post('country'),
                    'logo' => $logo_name,
                    'established_year' => $this->input->post('year'),
                    'products' => $this->input->post('products'),
                    'founder_name' => $this->input->post('founder'),
                    'designation' => $this->input->post('designation'),
                    'batch_label' => $this->input->post('batchlabel'),
                    'founder_image' => $founder_image_name
                );

                $this->form_model->insert_form($data);

                redirect('ajaxsearch');

            }


        }

        public function view(){

            $this->load->model('form_model');

            $this->load->view('templates/header1');

            $output['h'] = $this->form_model->select();

            $this->load->view('ajaxsearch', $output);

            $this->load->view('templates/footer');
        }



        public function fetch()
        {
            $query = '';
            $this->load->model('form_model');
            if($this->input->post('query'))
            {
                $query = $this->input->post('query');
            }

            $data['h'] = $this->form_model->fetch($query);

            $this->load->view('form_output', $data);

        }


        public function upload(){

            $config['upload_path'] = "./images/";
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if($this->upload->do_upload()){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('home', $error);
            }
            else{
                $file_data = $this->upload->data();
                $data['img'] = base_url().'images/'.$file_data['filename'];
                $this->load->view('success_msg', $data);
            }

        }

        public function editform(){
            $this->load->model('form_model');

            $this->load->view('templates/dashboard_header');

            $this->load->helper(array('form','url'));

            $userid = $this->uri->segment(3);

            $config['upload_path']          = './images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('logo'))
            {
                $error = array('error' => $this->upload->display_errors());

                $logo_name = 'placeholder-image1';

                $this->load->view('form_view', $error);
            }
            else
            {
                $logo_data = array('upload_data' => $this->upload->data());
                $logo_name = $logo_data['upload_data']['file_name'];
                $logo_path = "http://localhost/assignment2/images/".$logo_name;
            }


            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('founderimage'))
            {
                $error = array('error' => $this->upload->display_errors());

                $founder_image_name = 'blank-image-person';

                $this->load->view('form_view', $error);
            }
            else
            {
                $founder_image_data = array('upload_data' => $this->upload->data());
                $founderimage_name = $founder_image_data['upload_data']['file_name'];
                $founder_image_path = $founder_image_data['upload_data']['full_path'];                    // echo $founder_image_path;
            }

            $this->load->library('form_validation');


            $this->form_validation->set_rules('description', ' Description', 'required');
            $this->form_validation->set_rules('industry', 'Industry', 'required');
            $this->form_validation->set_rules('contact', 'Contact', 'required|numeric|exact_length[10]');
            $this->form_validation->set_rules('twitter', 'Twitter', '');
            $this->form_validation->set_rules('linkedin', 'LinkedIn Profile URL', 'required');
            $this->form_validation->set_rules('facebookpage', 'Facebook Page','');
            $this->form_validation->set_rules('instagram', 'Instagram Page','');
            $this->form_validation->set_rules('website', 'Website URL','');
            $this->form_validation->set_rules('email', 'Email Id','required|valid_email');
            $this->form_validation->set_rules('city', 'City','required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('logo', 'Business Logo', '');
            $this->form_validation->set_rules('year', 'Established Year', 'required|numeric');
            $this->form_validation->set_rules('products', 'Products/serices', 'required');
            $this->form_validation->set_rules('founder', 'Founder Name', 'required');
            $this->form_validation->set_rules('designation', 'Designation', 'required');
            $this->form_validation->set_rules('batchlabel', 'Batch', 'required|numeric');
            $this->form_validation->set_rules('founderimage', 'Founder Image', '');

            if ($this->form_validation->run() == FALSE)
            {
                $data['title'] = 'Edit Business Details - B2B Exchange Module';
                
                $data['content'] = 'pages/edit_form';
                $this->load->view('templates/master', $data);
                // $this->load->view('pages/edit_form');
            }
            else
            {
                $data = array(
                    'description' => $this->input->post('description'),
                    'industry' => $this->input->post('industry'),
                    'contact' => $this->input->post('contact'),
                    'twitter' => $this->input->post('twitter'),
                    'linkedin' => $this->input->post('linkedin'),
                    'facebook_page' => $this->input->post('facebookpage'),
                    'instagram' => $this->input->post('instagram'),
                    'website' => $this->input->post('website'),
                    'email' => $this->input->post('email'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'country' => $this->input->post('country'),
                    'logo' => $logo_name,
                    'established_year' => $this->input->post('year'),
                    'products' => $this->input->post('products'),
                    'founder_name' => $this->input->post('founder'),
                    'designation' => $this->input->post('designation'),
                    'batch_label' => $this->input->post('batchlabel'),
                    'founder_image' => $founder_image_name
                );

                $this->form_model->update($data, $userid);

                redirect('ajaxsearch');

            }

            $this->load->view('templates/footer');
        }



        public function individual(){
            $this->load->model('form_model');

            $this->load->view('templates/header');

            $userid = $this->input->post('id');

            $output['y'] = $this->form_model->selectsingle($userid);

            $this->load->view('business-individual',$output);

            $this->load->view('templates/footer');

        }
    }
?>