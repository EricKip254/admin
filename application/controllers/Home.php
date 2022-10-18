<?php
class Home extends CI_Controller {

        public function index()
        {
            $data['page_title'] = 'Home';
            $this->load->view('templates/header');
            $this->load->view('home/home');
            $this->load->view('templates/footer');
        }
}
  