<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu extends CI_Controller {

	function trangchu()
	{
        parent::__construct();
		$this->load->library('session');
       //$this->output->cache(5) ;
        $this->load->model('Trangchu_model');
       // $this->load->model('tintuc_model');
        $this->load->library('util');
        $this->load->helper(array('form','url','date'));
		$this->load->library('form_validation');
        $this->session->unset_userdata('anh');
  	}
    function index(){
        // $data['title']="Thi công mạng"; 
        $data['laygroupproject']=$this->Trangchu_model->laygroupproject();
         $data['laygrouptintuc']=$this->Trangchu_model->laygrouptintuc();
         $data['layboxtext']=$this->Trangchu_model->layboxtext();
         $data['laypartner']=$this->Trangchu_model->laypartner();
         $data['content']='home';
        $this->load->view('layout/template',$data);
        
    }
   
}
?>