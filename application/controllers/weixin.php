<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 引用流程接入口 
 */

class Weixin extends HT_Controller
{		
	public function __construct()
	{
		parent::__construct();		
	}
	
	public function index($id='0')
	{	
		$this->load->model('user_model','',TRUE);

		$postStr = file_get_contents("php://input");

		if (!empty($postStr)){
                
              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $time = time();

                $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[text]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>"; 

                $textTplWithImg = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[news]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<ArticleCount>1</ArticleCount>
							<Articles>
							<item>
							<Title><![CDATA[%s]]></Title>
							<Discription><![CDATA[%s]]></Discription>
							<PicUrl><![CDATA[%s]]></PicUrl>
							<Url><![CDATA[%s]]></Url>
							</item>
							</Articles>
 							<FuncFlag>0</FuncFlag>
							</xml>";              
				if(!empty( $keyword ))
                {
                	$item = $this->user_model->get_entry_byname($keyword);
                	if(empty($item))
                	{
                		$contentStr = "查无此人。";
	                	$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $contentStr);
	                	echo $resultStr;
                	}
                	else
                	{
                		$contentStr = "";
                		$title = $item['name'];
                		$discription = "所在地".$item['location']."工作".$item['job']."手机".$item['mobile'];
                		$picUrl = $item['img_url'];
                		$url = $item['url'];
                		$resultStr = sprintf($textTplWithImg, $fromUsername, $toUsername, $time, $contentStr,$title,$discription,$picUrl,$url);
	                	echo $resultStr;
                	}
             
                }else{
                	echo "";
                }
		
        }else {
        	echo "";
        	exit;
        }
		
	}


}


/* End of file explore.php */
/* Location: ./application/controllers/explore.php */
