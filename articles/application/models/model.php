<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model extends CI_Model {

    public function get_details($id) {
        
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('admin');
        return $query->result();
        
    }

}
?>