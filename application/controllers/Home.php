<?php
class Home extends CI_Controller {

        public function index()
        {
            //$data['page_title'] = 'Your title';
            $this->load->view('clientemplates/header');
            $this->load->view('home/home');
            $this->load->view('clientemplates/footer');
        }
}
  