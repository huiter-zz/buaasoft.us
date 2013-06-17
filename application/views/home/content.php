<div class="row">
<div class="span2">
    <a href="#" class="thumbnail"><img  style="width: 200px; height: 140px; " src=""> </a>
</div>
<div class="span10">
	<h1><?php echo $data['name'];?></h1>
	<table class="table table-bordered table-striped"> 
			<colgroup> <col class="span1"> <col class="span7"> </colgroup> 
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

	<div class="btn-group span4" style="margin-top:0px;margin-left:0px;">
	    <?php if ( isset ($data['bind_weibo']) && ! empty($data['bind_weibo'])): ?>
	        <a class="btn" target="_blank" href="http://weibo.com/<?php echo $data['bind_weibo'];?>"><i class="icon-weibo"></i></a>
	    <?php endif;?> 
	    <?php if ( isset ($data['bind_renren']) && ! empty($data['bind_renren'])):?>
	        <a class="btn" target="_blank" href="http://www.renren.com/<?php echo $data['bind_renren'];?>"><i class="icon-renren"></i></a>
	    <?php endif;?> 
	    <?php if ( isset ($data['bind_douban']) && ! empty($data['bind_douban'])):?>
	        <a class="btn" target="_blank" href="http://www.douban.com/people/<?php echo $data['bind_douban'];?>"><i class="icon-douban"></i></a>
	    <?php endif;?> 
	        <?php if ( isset ($data['bind_qq']) && ! empty($data['bind_qq'])):?>
	        <a class="btn" target="_blank" href="http://user.qzone.qq.com/<?php echo $data['bind_qq'];?>"><i class="icon-qzone"></i></a>
	    <?php endif;?> 
	</div>
</div>
</div>
<div class="row" style="margin-top:10px;">
	<div class="span12">
		<div class="well">
			<i class="icon-comment"></i> <code>寄语</code><?php echo $data['descripe'];?>
		</div>
	</div>
</div>