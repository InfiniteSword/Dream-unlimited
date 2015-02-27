<?php /* Smarty version Smarty-3.0.8, created on 2015-02-27 16:32:25
         compiled from "D:\wamp\www\BiliFun-master/tpl\video.html" */ ?>
<?php /*%%SmartyHeaderCode:2619254f02b996afcd1-95261878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6a1c195a3947c50d30755dd42e31777695e486' => 
    array (
      0 => 'D:\\wamp\\www\\BiliFun-master/tpl\\video.html',
      1 => 1425025942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2619254f02b996afcd1-95261878',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\BiliFun-master\common\SpeedPHP\Drivers\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/css/video.css">
<title><?php echo $_smarty_tpl->getVariable('prow')->value['video_name'];?>
</title>
</head>

<body>
	<header id="my-header">
		<?php $_template = new Smarty_Internal_Template("navbar.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</header>

	<!-- main -->
	<div class="my-content">

		<!-- 视频信息 -->
		<div class="row">
			<div class="col-md-10">
				<p class="lead"><?php echo $_smarty_tpl->getVariable('prow')->value['channel'];?>
</p>
				<span class="person-name"><?php echo $_smarty_tpl->getVariable('prow')->value['author'];?>
</span><span>发布于</span><span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('prow')->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</span>
			</div>
			<div class="col-md-2">
				<a href="#">收藏</a>
				<a href="#">评论</a>
			</div>
		</div>

		<!-- 播放器 -->
		<div class="video">
			<video src="../public/video/[FLsnow][Fate_stay_night][01][BDrip][720p][AVC_AAC].mp4" class="my-video" controls="controls">
				您的浏览器不支持 video 标签。
			</video>
			
			<input type="text" class="my-input" placeholder=" 此处填装弹幕">
			<button type="submit" class="btn shoot">发射！</button>
		</div>

		<!-- 标签 -->
		<div class="video-tag">
			<p><span> 标签：</span><a href="#"> hhhh </a></p>
			<hr>
			<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
		</div>

		<hr>

		<!-- 评论区 -->
		<div>
			<p>说两句呗~o(*￣▽￣*)ブ</p>
			<form class="say-form">
				<textarea class="form-control" rows="4" name="message"></textarea>
				<button type="submit" class="btn btn-primary"> 发表评论 </button>
			</form>



			<h6>评论区</h6>
			<hr>
			<div class="panel panel-default">

		  	<div class="panel-body">
	   			<span class="badge badge-info">1</span>
	    		<a href="">月落丶音阑</a>
	    		<span class="time">2015-02-22 22:11:43</span>
	    		<span><a class="btn-quote">[回复]</a></span>
		    	<div class="comment-content">
		    		<p>沙发~~~~~</p>
		    	</div>
		  	</div>

			</div>
		</div>
	
	<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

	</div>
</body>
</html>