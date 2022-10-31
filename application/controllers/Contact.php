<?php
class Contact extends CI_Controller {

        public function index()
        {
            //$data['page_title'] = 'Home Page';
            $this->load->view('templates/lheader');
            $this->load->view('contact/contact');
            $this->load->view('templates/lfooter');
        }
}