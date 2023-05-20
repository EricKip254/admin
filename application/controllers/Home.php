<?php
class Home extends CI_Controller {

        public function index()
        {
            $this->data['title'] = 'Home';
            $this->load->view('templates/header', $this->data);
            $this->load->view('home/home');
            $this->load->view('templates/footer');
        }
}
  