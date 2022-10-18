<?php
class Dashboard extends CI_Controller {

        public function index()
        {
            //$data['page_title'] = 'Home Page';
            $this->load->view('templates/dheader');
            $this->load->view('dashboard/dashboard');
            $this->load->view('templates/dfooter');
        }
}
  