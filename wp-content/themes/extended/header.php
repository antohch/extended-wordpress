<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); wp_title();?></title>
<?php wp_head();?>
</head>
<body>
<div class="karkas">
	<div class="header">
		<a href="#"><img class="logo" src="<?php bloginfo('template_url')?>/images/logo.png" alt="" /></a>
		<p class="head-contakt">
		<img src="<?php bloginfo('template_url')?>/images/mail.png" alt="" /><a href="mailto:<?php bloginfo('admin_email');?>"><?php bloginfo('admin_email');?></a>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; <img src="<?php bloginfo('template_url')?>/images/phone.png" alt="" /><?php echo get_option('my_phone');?>
		</p>
		<div class="head-soc">
			<a href="#"><img src="<?php bloginfo('template_url')?>/images/facebook.png" alt="" /></a>
			<a href="#"><img src="<?php bloginfo('template_url')?>/images/twitter.png" alt="" /></a>
			<a href="#"><img src="<?php bloginfo('template_url')?>/images/soc1.png" alt="" /></a>
			<a href="#"><img src="<?php bloginfo('template_url')?>/images/soc2.png" alt="" /></a>
			<a href="#"><img src="<?php bloginfo('template_url')?>/images/youtube.png" alt="" /></a>
			<a href="#"><img src="<?php bloginfo('template_url')?>/images/v.png" alt="" /></a>
			<a href="#"><img src="<?php bloginfo('template_url')?>/images/rss.png" alt="" /></a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">The Team</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Our Work</a></li>
				<li><a href="#">Our Videos</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<div class="search">
				<form action="">
					<input class="search-txt" type="text" name="search" value="Поиск" onfocus="if(this.value=='Поиск')this.value=''" onblur="if(this.value=='')this.value='Поиск'" />
					<input type="image" src="<?php bloginfo('template_url')?>/images/search.png"/>
				</form>
			</div>
		</div>
	</div>