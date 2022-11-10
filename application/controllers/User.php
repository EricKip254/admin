<?php
class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->datetime=date("Y-m-d H:i:s");
        $this->load->model("users");
    }

   
        public function index()
        {
            //$data['page_title'] = 'Home Page';
            $this->load->view('templates/dheader');
            $this->load->view('users/list');
            $this->load->view('templates/dfooter');
        }

        public function register(){
            // $data['title'] = 'Sign Up';

            $this->form_validation->set_rules('FName', 'required');
            $this->form_validation->set_rules('LName', 'required');
            $this->form_validation->set_rules('Role', 'required');
            $this->form_validation->set_rules('Phone', 'required|callback_check_phone_exists');
            $this->form_validation->set_rules('Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('Password', 'Password', 'required');
            $this->form_validation->set_rules('Password2', 'Confirm Password', 'matches[Password]');

            if($this->form_validation->run() === FALSE){
                
                $this->data['roles']=$this->users->roles();

                $this->load->view('templates/dheader', $this->data);
                $this->load->view('users/add');
                $this->load->view('templates/dfooter');
            }else{
                //encrypting password
                $enc_password = md5($this->input->post('Password'));
                $this->users->register($enc_password);
                redirect('user');

                //user message
                //$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
                //redirect('users');

            }
        }

        //check if user exists

        public function check_phone_exists($Phone){
            $this->form_validation->set_message('check_phone_exists', 'That phone number is taken. Please choose a different one');
            if($this->users->check_username_exists($Phone)){
				return true;
			} else {
				return false;
			}
        }

        //check if email exists

        public function check_email_exists($Email){
            $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
            if($this->users->check_email_exists($Email)){
				return true;
			} else {
				return false;
			}
        }
}
  