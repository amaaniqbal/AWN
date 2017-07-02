<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->database();
    }
    
    public function index($id) {
        $this->load->model('model');

        $data['result'] = $this->model->get_details($id);
        
        $this->load->view('article', $data);
            
    }
    
}
?>
