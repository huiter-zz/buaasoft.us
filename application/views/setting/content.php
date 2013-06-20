<div class="row" style="margin-top:20px;">
	<div class="span12">
		<ul class="nav nav-tabs  nav-tabs-google">
		  <li class="active"><a href="#profile" data-toggle="tab">个人信息</a></li>
		  <li><a href="#social" data-toggle="tab">社交网络</a></li>
		  <li><a href="#password" data-toggle="tab">重置密码</a></li>
		</ul>
		<div class="tab-content">
		  	<div class="tab-pane span6" id="social">	     
				<form method="post" action="/setting/bind">
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-qq"></i></span>
				    <input name="qq" class="span2" type="text" placeholder="QQ" value="<?php echo $data['bind_qq'];?>">
				  </div>
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-weibo"></i></span>
				    <input name="weibo" class="span2" type="text" placeholder="微博昵称" value="<?php echo $data['bind_weibo'];?>">
				  </div>
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-douban"></i></span>
				    <input name="douban" class="span2" type="text" placeholder="豆瓣帐号" value="<?php echo $data['bind_douban'];?>">
				  </div>
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-renren"></i></span>
				    <input name="renren" class="span2" type="text" placeholder="人人ID" value="<?php echo $data['bind_renren'];?>">
				  </div>
				  <div class="">
				  <button type="submit" class="btn btn-primary" id="submit">更新相关账号</button>
				  </div>
				</form>
			</div>
		 	 <div class="tab-pane active span6" id="profile">		
				<form method="post"  action="/setting/profile">
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-envelope"></i></span>
				    <input name="email" class="span2" type="text" placeholder="邮箱" value="<?php echo $data['email'];?>">
				  </div>
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-mobile-phone"></i></span>
				    <input name="mobile" class="span2" type="text" placeholder="手机号" value="<?php echo $data['mobile'];?>">
				  </div>
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-map-marker"></i></span>
				    <input name="location" class="span2" type="text" placeholder="所在地" value="<?php echo $data['location'];?>">
				  </div>
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-meh"></i></span>
				    <input name="job" class="span2" type="text" placeholder="工作" value="<?php echo $data['job'];?>">
				  </div>
				  <div class="input-prepend">
				    <span class="add-on"><i class="icon-comment"></i></span>
				    <input name="descripe" class="span2" type="text" placeholder="其他想说的" value="<?php echo $data['descripe'];?>">
				  </div>
				  <button type="submit" class="btn btn-primary" id="submit">更新个人信息</button>
				</form>
			</div>
			<div class="tab-pane span6" id="password">		
			  	<form method="post" action="/setting/password">
			  		<div class="input-prepend">
					  <span class="add-on"><i class="icon-lock"></i></span>
					    <input name="password" class="span2" type="text" placeholder="密码">
					  </div>
					  <button type="submit" class="btn btn-primary" id="submit">确认修改密码</button>
				</form>
			</div>
		</div>
		<hr>
  </div>
 
	</div>
</div>
