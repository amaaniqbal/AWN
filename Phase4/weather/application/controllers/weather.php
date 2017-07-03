<?php
class Weather extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','security'));
        $this->load->library(array('form_validation', 'session'));
        //$this->load->library('session');
        $this->load->database();
    }
    
    public function index() {
        $this->load->view('weather');
    }
    
    public function display() {
            
        $this->form_validation->set_rules('city', 'City', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error_message', 'Please Enter A Valid City Name !!!');  
            $this->index();
            //$this->load->view('index');
        }
        else
        {
            
            $weather = "";
            $city = $this->input->post('city');
            //if(isset($_POST['city'])) {
        
            $file_headers = @get_headers("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($city)."&appid=1d82a3f168533b47807fd49c8559c700");
        
            if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
                
                $this->session->set_flashdata('error_message', 'Could Not Find City - Please Try Again !!!');  
                $this->index();
                //$error = "Could Not Find City - Please Try Again.";
            
            } else {
        
                $content = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($city)."&appid=1d82a3f168533b47807fd49c8559c700");

                $weatherArray = json_decode($content, true);  //true to return the data in the form of associative array

                if ($weatherArray['cod'] == 200) {

                    $weather = "The weather in ".$city." is currently '".$weatherArray['weather'][0]['description']."'. <br><br>";

                    $tempInCelcius = $weatherArray['main']['temp'] - 273.15;

                    $windDirection = intval(($weatherArray['wind']['deg']/22.5)+.5);

                    $directionArray = array("N","NNE","NE","ENE","E","ESE", "SE", "SSE","S","SSW","SW","WSW","W","WNW","NW","NNW");

                    $weather .="<p><span style='float:left'>TEMPERATURE</span><span style='clear:both'>&nbsp;</span><span style='float:right'>".$tempInCelcius." &deg;C</span></p>";
                    $weather .="<p><span style='float:left'>WIND</span><span style='clear:both'>&nbsp;</span><span style='float:right'>".$weatherArray['wind']['speed']." m/s ".$directionArray[($windDirection % 16)]."</span></p>";
                    $weather .="<p><span style='float:left'>HUMIDITY</span><span style='clear:both'>&nbsp;</span><span style='float:right'>".$weatherArray['main']['humidity']." %</span></p>";
                    $weather .="<p><span style='float:left'>PRESSURE</span><span style='clear:both'>&nbsp;</span><span style='float:right'>".$weatherArray['main']['pressure']." hPa</span></p>";
                    $this->session->set_flashdata('success_message', $weather);  
                    $this->index();
                    //$weather .= " The temperature is ".$tempInCelcius."&deg;C and the wind speed is ".$weatherArray['wind']['speed']."m/s.";
                    //$data['weather'] = $weather;
                } else {
                        
                    $this->session->set_flashdata('error_message', 'Could Not Find City - Please Try Again !!!');  
                    $this->index();
                    //$error = "Could Not Find City - Please Try Again.";
                    //$data['error'] = $error;
                }
            }
            //$this->load->view('index', $data);
        }   
    }           
}