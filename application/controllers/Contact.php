<?php
class Contact extends CI_Controller {

        public function index()
        {
            $this->data['title'] = 'Contact';
            $this->load->view('templates/header', $this->data);
            $this->load->view('contact/contact');
            $this->load->view('templates/footer');
        }
}