<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Rbac{
    private $ci_obj;
    public function __construct()
    {
       $this->ci_obj=&get_instance();
       $this->ci_obj->load->helper(array('rbac','url'));
       $this->ci_obj->load->config('rbac');
       if(!isset($this->ci_obj->view_override))
       {
       	 //默认重写view开
       	 $this->ci_obj->view_override=TRUE;
       }
    }

}