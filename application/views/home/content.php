<div class="row well">
	<div class="span2">
    	<a href="#" class="thumbnail"><img  style="width: 200px; height: 140px; " src="/assets/img/qrcode.jpg"> </a>
	</div>
	<div class="span8">
		<br>
		<br>
		<h4>扫描左侧二维码，加buaa921为好友。<br>如对话输入<code>@杨帆</code>即可获得杨帆同志最新的联系方式。</h4>
	</div>
</div>
<hr>
<div class="row">
<div class="span2">
    <a href="#" class="thumbnail"><img  style="width: 200px; height: 140px; " src="/avatar/<?php echo $data['id'];?>"> </a>
</div>
<div class="span10">
	<div><h1><?php echo $data['name'];?><h1></div>
		<div class="btn-group span4" style="margin-top:0px;margin-left:0px;">
	    <?php if ( isset ($data['bind_weibo']) && ! empty($data['bind_weibo'])): ?>
	        <a class="btn btn-info" target="_blank" href="http://weibo.com/<?php echo $data['bind_weibo'];?>"><i class="icon-weibo icon-large"></i></a>
	    <?php endif;?> 
	    <?php if ( isset ($data['bind_renren']) && ! empty($data['bind_renren'])):?>
	        <a class="btn btn-info" target="_blank" href="http://www.renren.com/<?php echo $data['bind_renren'];?>"><i class="icon-renren icon-large"></i></a>
	    <?php endif;?> 
	    <?php if ( isset ($data['bind_douban']) && ! empty($data['bind_douban'])):?>
	        <a class="btn btn-info" target="_blank" href="http://www.douban.com/people/<?php echo $data['bind_douban'];?>"><i class="icon-douban icon-large"></i></a>
	    <?php endif;?> 
	        <?php if ( isset ($data['bind_qq']) && ! empty($data['bind_qq'])):?>
	        <a class="btn btn-info" target="_blank" href="http://user.qzone.qq.com/<?php echo $data['bind_qq'];?>"><i class="icon-qzone icon-large"></i></a>
	    <?php endif;?> 
	   </div>
	<div style="margin-top:50px;">
	<table class="table table-bordered table-striped" > 
			<colgroup> <col class="span1"> <col class="span10"> </colgroup> 
		<tbody> 
			<tr> 
				 <td><i class="icon-map-marker"></i><code>所在地</code></td>
				 <td><?php echo $data['location'];?></td>
				 <td><i class="icon-map-marker"></i> <code>工作</code></td>
				 <td><?php echo $data['job'];?></td>
				 <td><i class="icon-mobile-phone"></i> <code>手机</code></td>
				 <td><?php echo $data['mobile'];?></td>
				 <td><i class="icon-envelope"></i> <code>邮箱</code></td>
				 <td><?php echo $data['email'];?></td>
		 	 </tr> 
		</tbody> 
	</table>
</div>
</div>
</div>
<div class="row" style="margin-top:20px;">
	<div class="span12">
		<ul class="nav nav-tabs  nav-tabs-google">
		  <li class="active"><a href="#392111" data-toggle="tab">392111班</a></li>
		  <li><a href="#392112" data-toggle="tab">392112班</a></li>
		  <li><a href="#392113" data-toggle="tab">392113班</a></li>
		  <li><a href="#392114" data-toggle="tab">392114班</a></li>
		  <li><a href="#392115" data-toggle="tab">392115班</a></li>
		</ul>
		<div class="tab-content row">
		  	<div class="tab-pane active span8" id="392111">	
		  	<table class="table table-striped">
              <thead>
                <tr>
                  <th width="20%">学号</th>
                  <th width="30%">姓名</th>
                  <th>去主页</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($c392111 as $key => $value):?>
                <tr>
                  <td><?php echo $value['id'];?></td>
					<td><?php echo $value['name'];?></td>
					<td><a class="btn btn-danger" target="_blank" href="/home/<?php echo $value['id'];?>"><i class="icon-arrow-right"></i></a></td>
                </tr>
            	<?php endforeach;?>
              </tbody>
            </table>     
			</div>
		 	 <div class="tab-pane span8" id="392112">
		 	 <table class="table table-striped">
              <thead>
                <tr>
                  <th width="20%">学号</th>
                  <th width="30%">姓名</th>
                  <th>去主页</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($c392112 as $key => $value):?>
                <tr>
                  <td><?php echo $value['id'];?></td>
					<td><?php echo $value['name'];?></td>
					<td><a class="btn btn-danger" target="_blank" href="/home/<?php echo $value['id'];?>"><i class="icon-arrow-right"></i></a></td>
                </tr>
            	<?php endforeach;?>
              </tbody>
            </table>     		
			</div>
			<div class="tab-pane span8" id="392113">
			<table class="table table-striped">
              <thead>
                <tr>
                  <th width="20%">学号</th>
                  <th width="30%">姓名</th>
                  <th>去主页</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($c392113 as $key => $value):?>
                <tr>
                  <td><?php echo $value['id'];?></td>
					<td><?php echo $value['name'];?></td>
					<td><a class="btn btn-danger" target="_blank" href="/home/<?php echo $value['id'];?>"><i class="icon-arrow-right"></i></a></td>
                </tr>
            	<?php endforeach;?>
              </tbody>
            </table>     		
			</div>
						<div class="tab-pane span8" id="392114">
			<table class="table table-striped">
              <thead>
                <tr>
                  <th width="20%">学号</th>
                  <th width="30%">姓名</th>
                  <th>去主页</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($c392114 as $key => $value):?>
                <tr>
                  <td><?php echo $value['id'];?></td>
					<td><?php echo $value['name'];?></td>
					<td><a class="btn btn-danger" target="_blank" href="/home/<?php echo $value['id'];?>"><i class="icon-arrow-right"></i></a></td>
                </tr>
            	<?php endforeach;?>
              </tbody>
            </table>     		
			</div>
						<div class="tab-pane span8" id="392115">
			<table class="table table-striped">
              <thead>
                <tr>
                  <th width="20%">学号</th>
                  <th width="30%">姓名</th>
                  <th>去主页</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($c392115 as $key => $value):?>
                <tr>
                  <td><?php echo $value['id'];?></td>
					<td><?php echo $value['name'];?></td>
					<td><a class="btn btn-danger" target="_blank" href="/home/<?php echo $value['id'];?>"><i class="icon-arrow-right"></i></a></td>
                </tr>
            	<?php endforeach;?>
              </tbody>
            </table>     		
			</div>
		</div>
		<hr>
  </div>
	</div>