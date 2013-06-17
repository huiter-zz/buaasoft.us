<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 引用流程接入口 
 */
class Home extends HT_Controller
{		
	public function __construct()
	{
		parent::__construct();		
	}
	
	public function index($uid = '')
	{	

       if(!$this->session->userdata('user'))
		{
			redirect(base_url('/'));
		}
		
		$this->load->model('user_model','',TRUE);
		if($uid =='')
		{
			$user = $this->session->userdata('user');
			$this->template['data'] = $this->user_model->select($user['id'],'');
		}
		else
		{
			$this->template['data'] = $this->user_model->select("$uid",'');
		}
		
		$this->template['css'] = $this->load->view('home/css',$this->template,TRUE);
		$this->template['content'] = $this->load->view('home/content',$this->template,TRUE);
		$this->template['js'] = $this->load->view('home/js',$this->template,TRUE);

		$this->load->view('template_view',$this->template);

	}
}