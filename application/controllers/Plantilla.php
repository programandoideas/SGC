<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plantilla extends MY_Funciones{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->Plantilla("inicio",array());
    }
}