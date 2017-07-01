<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modal extends CI_Model {


    public function insert($data) {

        if($this->db->insert('sign_up', $data)) {
            
            redirect('form/display');
            
        }
    }
    
    function can_login($email, $password) {  
           $this->db->where('email', $email);  
           $this->db->where('password', $password);  
           $query = $this->db->get('sign_up');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }
    
    function get_name($email) {
        $this->db->select('first_name');
        $this->db->where('email', $email);
        $query = $this->db->get('sign_up');
        return $query->row()->first_name;
    }
        
    function subscribe_email($email_id) {
            if($this->db->insert('subscriber', $email_id)) {
                return true;
            }
            else {
                return false;
            }
    }

}
?>


