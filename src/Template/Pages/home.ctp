<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Cơ khí Hải Đăng | Máy xay thịt</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="img/logo_haidang.png" />
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<style> 
	ul#toolbar{
		  display: none !important;
	}
</style>
</head>
<body>
<div class="wrap">
<div class="header">
	<div class="logo">
		<div style="padding: 25px;font-size: 36px;color: yellowgreen;margin: 10px;">
		<!--<img src="img/logo_haidang.png" alt=""> -->
		Cơ khí Hải Đăng</div>
	</div>
	<div class="header-right">
	<div class="contact-info">
		<ul>
			<li>0977 617 827</li> 
			<li>0913 755 291</li>
		</ul> 
	</div>
	<div class="menu">
	 	 <ul class="nav">
        <li class="active"><a href="#" title="Home">Trang chủ</a></li>
  		<li><a href="#">Sản phẩm</a></li>
  	     <li><a href="#">Thiết bị máy móc</a></li>
  		<li><a href="#">Dịch vụ</a></li>
  		<li><a href="#">Giới thiệu</a></li>
	    <li><a href="#">Liên hệ</a></li>
	    <!--<li><a href="index.html">My Account</a></li> -->
  		<div class="clear"></div>
      </ul>
	 </div>
	 </div>
	<div class="clear"></div>
</div>
<div class="hdr-btm">
<div class="hdr-btm-bg"></div>
<div class="hdr-btm-left">
	<div class="search">
	  <form>
		<input type="text" value="Nhập từ tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'keyword here';}">
		<input type="submit" value="Tìm kiếm">
	  </form>
	</div>
	<div class="drp-dwn">
			<select class="custom-select" id="select-1">
			<option selected="selected">Sản Phẩm</option>
			<option>Máy xay thịt</option>
			<option>Thiết bị nhà tắm</option>
			<option>Nhôm kinh</option>
			<option>Thiết bị khác</option>
		</select>
	</div>
	<div class="txt-right">
		<h3><a href="">Tìm kiếm nâng cao</a></h3>
	</div>
	<div class="clear"></div>
</div>
</div>
<div class="main">
<div class="sidebar">
<div class="s-main">
	<div class="s_hdr">
		<h2>Máy xoay giò chả</h2>
	</div>
	<div class="text1-nav">
		<ul>
			<li><a href="">Máy xoay giò chả 2kg - 5kg</a></li>
			<li><a href="">Máy xoay giò chả 10kg</a></li>
			<li><a href="">Máy xoay giò chả 15kg</a></li>
			<li><a href="">Máy xoay giò chả 20kg</a></li>
			<li><a href="">Máy xoay giò chả 25kg</a></li>
			<li><a href="">Máy xoay giò chả 30kg</a></li>
			<li><a href="">Máy xoay giò chả 35kg</a></li>
			<li><a href="">Máy xoay giò chả 40kg</a></li>
			<li><a href="">Máy xoay giò chả 50kg</a></li>
	    </ul>
	</div>
</div>
<div class="s-main">
	<div class="s_hdr1">
		<h2>Thiết bị</h2>
	</div>
	<div class="text1-nav">
		<ul>
			<li><a href="">Máy phay CNC</a></li>
			<li><a href="">Máy tiện CNC</a></li>
			<li><a href="">Chế tạo khuôn mẫu</a></li>
			<li><a href="">Máy bắn lỗ cắt dây</a></li>
			<li><a href="">Máy bắn điện cực chế tạo khuôn</a></li>
			<li><a href="">Máy ép thủy lực</a></li>
	    </ul>
	</div>
</div>
<div class="s-main">
	<div class="s_hdr1">
		<h2>Thiết bị nhà tắm , nhà bếp</h2>
	</div>
	<div class="text1-nav">
		<ul>
			<li><a href="">Thiết bị nhà tắm</a></li>
			<li><a href="">Thiết bị nhà bếp</a></li>
	    </ul>
	</div>
</div>
<div class="s-main">
	<div class="s_hdr1">
		<h2>Nhôm kính</h2>
	</div>
	<div class="text1-nav">
		<ul>
			<li><a href="">Cửa nhôm</a></li>
			<li><a href="">Tủ nhôm</a></li>
	    </ul>
	</div>
</div>
<div class="s-main">
	<div class="s_hdr1">
		<h2>Sản phẩm khác</h2>
	</div>
	<div class="text1-nav">
		<ul>
			<li><a href="">Máy tạo viên thịt cá</a></li>
			<li><a href="">Máy xay cua</a></li>
			<li><a href="">Máy nghiền</a></li>
			<li><a href="">Máy xay thịt làm nem, lạc xưởng chả cá</a></li>
			<li><a href="">Máy cắt bị tai heo</a></li>
			<li><a href="">Máy trộn</a></li>
			<li><a href="">Băng tải</a></li>
			<li><a href="">Nhà xưởng</a></li>
			<li><a href="">Bình áp lực,bồn dầu</a></li>
			<li><a href="">Tủ hấp</a></li>
			<li><a href="">Biến tần 0.5HP-200HP</a></li>
	    </ul>
	</div>
</div>

</div>
<div class="content">
	<!--<div class="cnt-btn">
		<a href="">Free Shipping</a>
	</div>
	<div class="cnt-btn">
		<a href="">Community</a>
	</div>
	<div class="cnt-btn">
		<a href="">$1 No Reserve</a>
	</div>
	<div class="cnt-btn">
		<a href="">Ending Soon</a>
	</div> -->
	<div class="clear"></div>
	<div class="cnt-main">

		<div class="s_btn">
		<h1>Sản Phẩm Bán chạy nhất </h1>
			<!--
			<ul>
				<li><h2>Sản Phẩm Bán chạy nhất!</h2></li>
				<li><h3><a href="login.html">Sign In</a></h3></li>
				<li><h2>Free Visit?</h2></li>
				<li><h4><a href="register.html">Register</a></h4></li>
				<div class="clear"></div>
			</ul> -->
		</div>
	<div class="grid">
	<div class="grid-img">
		<a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
	</div>
	<div class="grid-para">
		<h2>Máy xay thịt 5kg</h2>
		<h3>Máy xay thịt</h3>
		<p>Máy xay thịt 5kg cho gia đình</p>
		<div class="btn top">
		<a href="#">Chi tiết &nbsp;<img src="img/marker2.png"></a>
		</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="cnt-main btm">
	<div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$21.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$91.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$62.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
				<div class="grid_1_of_3 images_1_of_3">	
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$92.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$12.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$63.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$86.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$61.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="#"><img src="img/mayxaygiocha10kg.jpg" alt=""/></a>
					 <a href="#"><h3>Máy xay thịt 5kg</h3></a>
					 <div class="cart-b">
					<span class="price left"><sup>$22.00</sup><sub></sub></span>
				    <div class="btn top-right right"><a href="#">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
				</div>
		
			</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="footer-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Giới thiệu </a></li>
			<li><a href="#">Sản phẩm</a></li>
			<li><a href="#">Thiết bị</a></li>
			<li><a href="#">Dịch vụ</a></li>
			<li><a href="#">Tin tức</a></li>
			<li><a href="#">Liên hệ</a></li>
			<!--<li><a href="#">Site Map</a></li> -->
		</ul>
	</div>
	<div class="footer1">
		<p>All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> Cơ khí Hải Đăng</a></p>
	</div>
</div>
</div>
</div>
</body>
</html>