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
        <title>Cơ khí Hải Đăng | Máy xay giò chả</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="../../img/logo_haidang.png" />

        <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
         <?php
            echo $this->Html->css('style.css');
      
if($type==1){
    echo "<meta name='description' content='✅Máy xay giò chả (chả lụa) thế hệ mới 2017. Chuyển giao công nghệ làm &quot;giò chả sạch&quot; và lắp đặt tận nơi  trên toàn quốc.'>";
    echo "<meta name='keywords' content='$keys'>";
}else{
    echo "<meta name='description' content='$description'>";
    echo "<meta name='keywords' content='$keys'>";
}

?>
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
                    <a href="http://mayxaygiochahaidang.com/">
                        <img src="../../../img/logo.png" alt=""> 
                    </a>
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
                             <li class="active"><a href="http://mayxaygiochahaidang.com" title="Products">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#lienhe">Liên hệ</a></li>
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
                            <input type="text" value="Nhập từ tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'keyword here';
                                    }">
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

                    <div class="clear"></div>
                </div>
            </div>

            <div class="main">
                <div class="sidebar">
                    <div class="s-main">
                        <div class="s_hdr">
                            <h2>Máy xay giò chả</h2>
                        </div>
                        <div class="text1-nav">
                            <ul>
			<?php
                  foreach ($menus as $row):
                  $type = $row->type;
                  if($type == 1){
                     echo "<li><a href = '".$this->Url->build
                              (["controller" => "Products","action"=>"view",$row->id])."'>$row->name.</a></li>";
                              }
                  endforeach;
               ?>
                            </ul>
                        </div>
                    </div>
                    <div class="s-main">
                        <div class="s_hdr">
                            <h2>Máy CNC</h2>
                        </div>
                        <div class="text1-nav">
                            <ul>
			<?php
                foreach ($menus as $row):
                  $type = $row->type;
                  if($type == 3){
                     echo "<li><a href = '".$this->Url->build
                              (["controller" => "Products","action"=>"view",$row->id])."'>$row->name.</a></li>";
                              }
                  endforeach;
               ?>
                            </ul>
                        </div>
                    </div>
                    <div class="s-main">
                        <div class="s_hdr">
                            <h2>Thiết bị nhà tắm , nhà bếp</h2>
                        </div>
                        <div class="text1-nav">
                            <ul>
			<?php
                foreach ($menus as $row):
                  $type = $row->type;
                  if($type == 2){
                     echo "<li><a href = '".$this->Url->build
                              (["controller" => "Products","action"=>"view",$row->id])."'>$row->name.</a></li>";
                              }
                  endforeach;
               ?>
                            </ul>
                        </div>
                    </div>
                    <div class="s-main">
                        <div class="s_hdr">
                            <h2>Nhôm kính</h2>
                        </div>
                        <div class="text1-nav">
                            <ul>

			<?php
                foreach ($menus as $row):
                  $type = $row->type;
                  if($type == 4){
                     echo "<li><a href = '".$this->Url->build
                              (["controller" => "Products","action"=>"view",$row->id])."'>$row->name.</a></li>";
                              }
                  endforeach;
               ?>
                            </ul>
                        </div>
                    </div>
                    <div class="s-main">
                        <div class="s_hdr">
                            <h2>Sản phẩm khác</h2>
                        </div>
                        <div class="text1-nav">
                            <ul>

			<?php
                foreach ($menus as $row):
                  $type = $row->type;
                  if($type == 5){
                     echo "<li><a href = '".$this->Url->build
                              (["controller" => "Products","action"=>"view",$row->id])."'>$row->name.</a></li>";
                              }
                  endforeach;
               ?>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="content">
                    <div class="cnt-main">

                        <div class="s_btn">
                            <h1><?php echo $name;?> </h1>
                        </div>
                        <div class="grid">
                            <div class="grid-img">
                                <a href="#"><img src="../../../img/haidang_img/<?php echo $pathImg;?>" alt=""/></a>
                            </div>
                            <div class="grid-para">
                                <?php echo $content;?>
                                <p>HotLine: <span style="color: indianred;font-size: 15px;font-weight: bold;">0977 617 827-0913 755 291</span></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="cnt-main btm">
                        <?php
                        echo "<div class='title-type'>Sản phẩm tương tự</div>";
                        echo "<div class='section group'>";
                            
                            $count =0;
                            foreach ($products as $product){
                              
                              echo "<div class='grid_1_of_3 images_1_of_3'>";
                              echo "<a href = '".$this->Url->build
                              (["controller" => "Products","action"=>"detail",$product->type,$product->id])."'><img src='../../../img/haidang_img/".$product->images."' /></a>";
                              echo "<a href = '".$this->Url->build
                              (["controller" => "Products","action"=>"detail",$product->type,$product->id])."'><h3>".$product->name."</h3></a>";
                              echo "<div class='cart-b'>";
                              echo "<div class='btn top-right right'><a href = '".$this->Url->build
                              (["controller" => "Products","action"=>"detail",$product->type,$product->id])."'>Chi tiết &nbsp;</a></div>";
                              echo "<div class='clear'></div>";
                              echo "</div></div>";
                              $count++;
                            }
                            echo "</div>";
                              ?>                        
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
                             <li class="active"><a href="#" title="Products">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="footer1" id="lienhe">
                        <p> CƠ SỞ SẢN XUẤT - GIA CÔNG CƠ KHÍ CHẾ TẠO MÁY HẢI ĐĂNG <p>
                        <p>Địa chỉ : 290 Đặng Thúc Vịnh, Ấp 2, X. Đông Thạnh, H. Hốc Môn, Tp.HCM <p>
                        <p>Email : hoanganhhung49@gmail.com - Website :<a href="http://mayxaygiochahaidang.com/">mayxaygiochahaidang.com</a></p>
                        <p>HotLine: <span style="color: indianred;font-size: 30px;font-weight: bold;">0977 617 827- 0913 755 291</span></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>