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
            $this->data['page_title'] = 'Home Page';
            $this->data['records']= $this->users->lists();
            $this->load->view('templates/dheader', $this->data);
            $this->load->view('users/list');
            $this->load->view('templates/dfooter');
        }


        // Add User Function
        public function register(){
<<<<<<< HEAD
=======
            $data['title'] = 'Sign Up';
            $this->data['roles']=$this->users->roles();
>>>>>>> 3f119e9cd074f3c147cc57946731b0be4736dca7

            $this->load->view('templates/dheader', $this->data);
            $this->load->view('users/add');
            $this->load->view('templates/dfooter');

            // $this->form_validation->set_rules('FName', 'required');
            // $this->form_validation->set_rules('LName', 'required');
            // $this->form_validation->set_rules('Role', 'required');
            // $this->form_validation->set_rules('Phone', 'required|callback_check_phone_exists');
            // $this->form_validation->set_rules('Email', 'required|callback_check_email_exists');
            // $this->form_validation->set_rules('Password', 'Password', 'required');
            // $this->form_validation->set_rules('Password2', 'Confirm Password', 'matches[Password]');

            if($this->form_validation->run() === FALSE){
                $this->data['title'] = 'Sign Up';
                $this->data['roles']=$this->users->roles();

                $this->load->view('templates/header', $this->data);
                $this->load->view('users/add');
                $this->load->view('templates/footer');
            }else{
                //encrypting password
                $enc_password = md5($this->input->post('Password'));
                $this->users->register($enc_password);
                redirect('user');

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
  