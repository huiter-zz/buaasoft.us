<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 引用流程接入口 
 */
class Avatar extends HT_Controller
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

		if($uid =='')
		{
			$user = $this->session->userdata('user');
			$uid = $user['uid'];
		}
		header("Content-type:image/PNG");
		  $im     = imagecreate(150,150);
		  $bkcolor   = imagecolorallocate($im, 0,0,0);
		  $color = "FFFFFF";
		  $fontcolor = imagecolorallocate($im, hexdec(substr($color,-6,2)),hexdec(substr($color,-4,2)),hexdec(substr($color,-2,2)));
		  imagecolortransparent($im,363636);
		  imagestring($im, 5, 40, 70,$uid,$fontcolor);
		  imagepng($im);
		  imagedestroy($im);
	}
}