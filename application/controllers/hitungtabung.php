<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hitungtabung extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('tabung');
    }
    
    function index(){
        $this->tabung->rumustabung('3,14','10','7');
        echo "<br/>";
    }
}