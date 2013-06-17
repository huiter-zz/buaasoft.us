<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message
{
	/**
	 * success,error,info,block
	 */
	public static function set($msg,$type = 'error')
	{
		$session = &load_class('Session');
		/*调用bootstrap alert 样式*/
		$msg_code = '<div class="alert alert-'.$type.'">'.'<button class="close" data-dismiss="alert">&times;</button>'.$msg.'</div>';
		$session->set_flashdata('message',$msg_code);
	}
	
}
/* End of file message.php */
/* Location: ./application/libraries/message.php */