<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Funciones extends CI_Controller{

	public function __construct() {
        parent::__construct();
    }

    public function Plantilla($view, $data = array()){
        $this->load->view("plantilla/header");
        $this->load->view($view,$data);
        $this->load->view("plantilla/footer");
    }


}