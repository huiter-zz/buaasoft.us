<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 引用流程接入口 
 */
class Login extends HT_Controller
{		
	public function __construct()
	{
		parent::__construct();		
	}
	
	public function index()
	{	
		
		$this->load->model('user_model','',TRUE);

		$id = $this->input->post('id');
		$password = $this->input->post('password');
		if(($id == '')||($password == ''))
		{
			redirect(base_url('/'));
		}
		$user = $this->user_model->select($id,'');

		if(($user['id']==$id)&&($user['password']==$password))
		{
			$this->session->set_userdata('user',$user);
			redirect(base_url('/home'));
		}
		else
		{       	
			Message::set('学号或密码错误','error');	
			redirect(base_url('/'));
		}
	}
}

/* End of file explore.php */
/* Location: ./application/controllers/explore.php */