<?php
class Form extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->load->database();
    }
    
    public function index() {
        $this->load->view('index');
            
    }
    
    public function submit() {
            $this->form_validation->set_rules('firstName', 'First Name', 'trim|required|alpha');
            $this->form_validation->set_rules('lastName', 'Last Name', 'trim|alpha');
            $this->form_validation->set_rules('signup_email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('signup_password', 'Password', 'trim|required|min_length[8]');
        
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('index');
            }
            else
            {
                $fname = $this->input->post('firstName');
                $lname = $this->input->post('lastName');
                $signup_email = $this->input->post('signup_email');
                $signup_password = $this->input->post('signup_password');
                // Checking if everything is there
                if ($fname && $signup_email && $signup_password) {
                    $data = array(
                        'first_name' => $fname,
                        'last_name' => $lname,
                        'email' => $signup_email,
                        'password' => $signup_password
                    );
                    $this->load->model('modal');
                    $this->modal->insert($data);
                }
            }           
    }
    
    public function login() {
        
            //$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');  
            $this->form_validation->set_rules('password', 'Password', 'trim|required');  
            if($this->form_validation->run())  
            {  
                //true  
                $email = $this->input->post('email');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('modal');  
                if($this->modal->can_login($email, $password))               //IMPORTANT LINE *** 
                {  
                     $session_data = array(  
                          'email'     =>     $email  
                     );  
                     $this->session->set_userdata($session_data);  
                     $this->enter($email);
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password Combination !!!');  
                     redirect(base_url(). 'index.php/form/index');
                }  
            }  
            else  
            {  
                //false  
                $this->index();  
            }  
      }  
      public function enter($email){  
           if($this->session->userdata('email') != '')  
           {  
                //$email = $this->input->post('email');  
                $this->load->model('modal');  
                $name = $this->modal->get_name($email);
                $this->display('Welcome Back !!! '.$name);                ///////////////////
           }  
           else  
           {  
                redirect(base_url(). 'index.php/form/index'); 
           }  
      }  
      public function logout()                          
      {  
           $this->session->unset_userdata('email');  
           redirect(base_url() . 'index.php/form/index'); 
      }  
        
    
    
    
      public function display($msg = "You have been signed in successfully!!!") {
          $data['msg'] = $msg;
            //$data['signin_success'] = "";
            $this->load->view('index1', $data);
      }
    
      public function subscriber() {
          
            $this->form_validation->set_rules('subscribe', 'Email', 'trim|required|valid_email');  
            
            if($this->form_validation->run())  
            {  
                //true  
                $subscribe = $this->input->post('subscribe');  
                
                //model function  
                $subscribe_array = array(
                        'subscriber' => $subscribe
                    );
                $this->load->model('modal');  
                if($this->modal->subscribe_email($subscribe_array))               //IMPORTANT LINE *** 
                {  
                     echo '<h1 style="text-align:center;padding-top:50px">Thank you for subscribing</h1>';  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Some Error Occurred. Please try again !!');  
                     redirect(base_url(). 'index.php/form/index');
                }  
            }  
            else  
            {  
                //false  
                $this->index();  
            }  
          
      }
}
?>
