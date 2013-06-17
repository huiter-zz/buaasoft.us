<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 扩展Controller
 */
class HT_Controller extends CI_Controller
{
	/**
	 * 设置统一Template 
	 * @var array
	 */
	protected $template;
	
	public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
		$this->load->library('rest', array('server' => 'http://'));	

        $this->template['url'] = $this->router->fetch_method();
        $this->template['class'] = $this->router->fetch_class();
   
    }
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php*/