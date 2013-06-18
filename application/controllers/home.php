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
			$this->template['c392111'] = $this->user_model->select_byclass('392111');
				$this->template['c392112'] = $this->user_model->select_byclass('392112');
						$this->template['c392113'] = $this->user_model->select_byclass('392113');
								$this->template['c392114'] = $this->user_model->select_byclass('392114');
										$this->template['c392115'] = $this->user_model->select_byclass('392115');

		if($uid =='')
		{
			$user = $this->session->userdata('user');
			$this->template['data'] = $this->user_model->select($user['id'],'');
			$this->template['content'] = $this->load->view('home/content',$this->template,TRUE);
		}
		else
		{
			$this->template['data'] = $this->user_model->select("$uid",'');
			$this->template['content'] = $this->load->view('home/content_simple',$this->template,TRUE);
		}

		$this->template['css'] = $this->load->view('home/css',$this->template,TRUE);

		$this->template['js'] = $this->load->view('home/js',$this->template,TRUE);

		$this->load->view('template_view',$this->template);

	}
}