<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('InfoModel');
        $this->load->library("pagination");
    }

    public function index()
    {
        if (!$this->check_login()) {
            redirect('welcome/login');
        }

//        $config = array();
//        $config["base_url"] = base_url()."index.php/Welcome/index";
//        $config["total_rows"] = $this->InfoModel->info_count();
//        $config["per_page"] = 15;
//        $config["uri_segment"] = 3;
//
//        $this->pagination->initialize($config);
//
//        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//        $data["infos"] = $this->InfoModel->
//        info_list($config["per_page"], $page);
//        $data["links"] = $this->pagination->create_links();
//
        $this->load->view('index');
    }

    public function addInfo()
    {
        if (!$this->check_login()) {
            redirect('welcome/login');
        }
        $this->addInfoPost();
        $this->load->view('add_info');
    }

    public function addInfoPost()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('client_id', 'client', 'required');
            $this->form_validation->set_rules('asin', 'asin', 'required');
            $this->form_validation->set_rules('marketplace_id', 'market', 'required');
            $this->form_validation->set_rules('seo[]', 'seo', 'required');
            $this->form_validation->set_rules('date_start', 'start date', 'required');

            if ($this->form_validation->run()) {
                $data = [];
                $data['client_id'] = utf8_encode($this->input->post('client_id'));
                $data['asin'] = utf8_encode($this->input->post('asin'));
                $data['marketplace_id'] =utf8_encode( $this->input->post('marketplace_id'));
                $data['seo'] =utf8_encode( implode(',',$this->input->post('seo')));
                $data['date_start'] =utf8_encode( $this->input->post('date_start'));
                $this->InfoModel->add_info($data);
                $this->session->set_flashdata('add', 'info added successfully');

            }
        }
    }

    public function delete()
    {
        if ($this->check_login() && $this->session->userdata['admin']=='yes')
        {
            $id=$this->uri->segment(3);
            $this->InfoModel->info_delete($id);
            $this->session->set_flashdata('delete','Info deleted !');
            redirect('/');
        }

    }

    public function login()
    {

        if ($this->check_login()) {
            redirect('/');
        }

        $this->load->view('login');
    }

    public function login_validation()
    {
        if ($this->check_login())
            redirect('/');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run()) {
            $username = $this->input->post('name');
            $password = $this->input->post('password');
            $this->load->model('UserModel');
            $user = $this->UserModel->can_login($username, $password);
            if ($user) {

                $session_data = [
                    'username' => $username,
                ];
                $this->session->set_userdata($session_data);
                redirect('/');
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('welcome/login');
            }


        } else {
            $this->login();
        }
    }

    public function check_login()
    {
        if ($this->session->userdata('username') == '')
            return false;
        return true;
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('welcome/login');
    }
}
