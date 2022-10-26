<?php
class Login extends CI_Controller {

        public function index()
        {
            //$data['page_title'] = 'Home Page';
            $this->load->view('templates/lheader');
            $this->load->view('login/login');
            $this->load->view('templates/lfooter');
        }
}
  