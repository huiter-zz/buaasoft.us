<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * 工作区 
 */
class Index extends HT_Controller
{		
	public function __construct()
	{
		parent::__construct();		
	}

	public function index()
	{
        if($this->session->userdata('user'))
		{
			redirect(base_url('/home'));
		}
		$this->template['css'] = $this->load->view('index/css',$this->template,TRUE);
		$this->template['content'] = $this->load->view('index/content',$this->template,TRUE);
		$this->template['js'] = $this->load->view('index/js',$this->template,TRUE);
			
		$this->load->view('template_view',$this->template);
	}
}