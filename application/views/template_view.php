<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
            <title>北航软件学院校友录</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="北航软件学院校友录，Design">
            <meta name="author" content="huiter">
            <!-- Le styles -->
            <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
            <link href="/assets/css/google-bootstrap.css" rel="stylesheet">
            <link href="/assets/css/font-awesome.css" rel="stylesheet">
            <link rel="stylesheet" href="/assets/css/fontdiao.css"> 
            <style type="text/css">
            body{
            padding-top:60px;
            }
            </style>
            <?php if ( isset ($css) && ! empty($css)): ?>
                <?php print $css;?>
            <?php endif;?>        
            <link rel="icon" type="image/png" href="http://soft.buaa.edu.cn/BuaaPublic/html/images/logo_bottom.jpg">
    </head>

    <body>
            <div class="navbar navbar-fixed-top navbar-inverse">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" style="color:white;">北航软件学院校友录</a>
                  <div class="nav"><span class="label label-important" style="margin:100px 0px 0 -20px;padding:3;">Beta</span></div>
                  <div class="nav-collapse">
                    <ul class="nav pull-right">
                      <li class="divider-vertical"></li>
                      <?php if($this->session->userdata('user')):?>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <?php $user = $this->session->userdata('user');
                          if($user['sex']=='女')
                          {echo '<i class="icon-female"></i>';}
                          else
                          {echo '<i class="icon-male"></i>';}
                          echo $user['name'];?>
                          <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a tabindex="0" href="/home"><i class="icon-home"></i>我的</a></li>
                          <li><a tabindex="1" href="/setting"><i class="icon-pencil"></i>设置</a></li>
                          <li class="divider"></li>
                          <li><a href="/quit"><i class="icon-frown"></i>退出</a></li>
                        </ul>
                      </li>
                       <?php endif;?>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>

    
    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
        <?php $message=$this->session->flashdata('message');?>
        <?php if ( isset ($message) && ! empty($message)): ?>
		     <?php /*处理消息提示*/echo $message;?>
        <?php endif;?>

        <?php if ( isset ($content) && ! empty($content)): ?>
            <?php print $content; ?>
        <?php endif ?>

        <div id="backtop" style="left: auto; right: 30px; position: fixed; top: auto; bottom: 30px; z-index: 99999999; overflow: hidden; ">
            <a href="#" title="返回顶部"><i class="icon-plane"></i></a>
        </div>
    <hr>
    <footer class="footer well" >
        <p >Copyright &copy;2013 Huiter, All Rights Reserved.</p>
    </footer>   
    </div> 
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script> 
        <script src="/assets/js/application.js"></script>  
       <?php if ( isset ($js) && ! empty($js)): ?>
            <?php print $js;?>
        <?php endif;?>  
    </body>
</html>