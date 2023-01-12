<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class tugas extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('tugas1');
    }
    function index(){
        $this->tugas1->volume_tabung('10','23');
    }
}
?>