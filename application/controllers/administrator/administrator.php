<?php
class administrator extends CI_Controller{

  function __construct(){
     parent::__construct();
  }
  
  function index(){
    $this->load->view('administrator/index');
  }
  
  function welcome()
  {
    $this->load->view('administrator/welcome');
  }
  
}