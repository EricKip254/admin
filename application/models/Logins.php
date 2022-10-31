<?php
class Logins extends CI_Model{
    //log in user
    public function login($email, $password){
        // Validate
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

}
