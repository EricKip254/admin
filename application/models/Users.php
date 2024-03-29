<?php 
class Users extends CI_Model{

    // Client side registration    
    public function register($enc_password){
        //user data
        $data = array(
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'OName' => $this->input->post('OName'),
            'Role' => 2,
            'Email' => $this->input->post('Email'),
            'Phone' => $this->input->post('Phone'),
            'Password' => $enc_password,
            'DateCreated' => $this->datetime,
        );

        //insert user data
        return $this->db->insert('users', $data);
    }

    // Admin side registration
    public function admin_register($enc_password){
        //user data
        $data = array(
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'OName' => $this->input->post('OName'),
            'Role' => $this->input->post('Role'),
            'Email' => $this->input->post('Email'),
            'Phone' => $this->input->post('Phone'),
            'Password' => $enc_password,
            'DateCreated' => $this->datetime,
        );

        //insert user data
        return $this->db->insert('users', $data);
    }

    public function roles(){
        $rows = [];
        $this->db->select('*' )
                ->from('roles')->where(array('Status'=>1));
        $query = $this->db->get();
        if($query->result()){
            $rows = $query->result();	
            $query->free_result();	
        }
            
        return( $rows );	
            
    }

    public function lists()
		{
			$rows = [];
			$this->db->select('t.FName, t.LName, t.DateCreated,u.RName, s.SName' )
					->from('users t')    
					->join('roles u', 't.Role=u.id')
					 ->join('status s', 't.Status=s.id') 
					->order_by('t.id','DESC');
			//$this->db->where( array('t.Status'=>1),'AND');
			$query = $this->db->get();
			if($query->result()){
				$rows = $query->result();	
				$query->free_result();	
			}
			return( $rows );
		}


    // Check if username exists
    public function check_phone_exists($Phone){
        $query = $this->db->get_where('users', array('Phone' => $Phone));
        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }

    // Check if email exists
    public function check_email_exists($Email){
        $query = $this->db->get_where('users', array('Email' => $Email));
        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }

}