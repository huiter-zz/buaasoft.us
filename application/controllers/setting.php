<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 引用流程接入口 
 */
class Setting extends HT_Controller
{		
	public function __construct()
	{
		parent::__construct();
				
	}
	
	public function index()
	{	

       if(!$this->session->userdata('user'))
		{
			redirect(base_url('/'));
		}
		$this->load->model('user_model','',TRUE);
		$user = $this->session->userdata('user');
		$this->template['data'] = $this->user_model->select($user['id'],'');
		$this->template['css'] = $this->load->view('setting/css',$this->template,TRUE);
		$this->template['content'] = $this->load->view('setting/content',$this->template,TRUE);
		$this->template['js'] = $this->load->view('setting/js',$this->template,TRUE);

		$this->load->view('template_view',$this->template);

	}

	public function bind()
	{	
		if(!$this->session->userdata('user'))
		{
			redirect(base_url('/'));
		}
		$this->load->model('user_model','',TRUE);
		$user = $this->session->userdata('user');

		$qq = $this->input->post('qq');
		$renren = $this->input->post('renren');
		$weibo  = $this->input->post('weibo');
		$douban = $this->input->post('douban');
		if($qq == '0'){$qq = '';}
		if($weibo == '0'){$weibo = '';}
		if($renren == '0'){$renren = '';}
		if($douban == '0'){$douban = '';}
		
		$array = array('bind_qq' => "$qq",'bind_renren' => "$renren", 'bind_weibo' => "$weibo", 'bind_douban' => "$douban");
		print_r($this->user_model->update($user['id'],$array));
		Message::set('社交账号更新成功','success');
		redirect(base_url('/setting'));

	}
		public function profile()
	{	
		if(!$this->session->userdata('user'))
		{
			redirect(base_url('/'));
		}
		$this->load->model('user_model','',TRUE);
		$user = $this->session->userdata('user');

		$location = $this->input->post('location');
		$job = $this->input->post('job');
		$mobile  = $this->input->post('mobile');
		$email = $this->input->post('email');
		$descripe = $this->input->post('descripe');

		if($location == '0'){$location = '';}
		if($email == '0'){$email = '';}
		if($descripe == '0'){$descripe = '';}
		if($mobile == '0'){$mobile = '';}
		if($job == '0'){$job = '';}
		
		
		$array = array('location' => "$location",'mobile' => "$mobile", 'job' => "$job", 'descripe' => "$descripe", 'email' => "$email");
		print_r($this->user_model->update($user['id'],$array));
		Message::set('个人信息更新成功','success');
		redirect(base_url('/setting'));

	}
		public function password()
	{	
		if(!$this->session->userdata('user'))
		{
			redirect(base_url('/'));
		}
		$this->load->model('user_model','',TRUE);
		$user = $this->session->userdata('user');

		$password = $this->input->post('password');
		if($password == '')
		{
			Message::set('密码不能为空','warning');
			redirect(base_url('/setting'));
		}
		
		$array = array('password'=>"$password");
		print_r($this->user_model->update($user['id'],$array));
		Message::set('重置密码成功','success');
		redirect(base_url('/setting'));

	}
}