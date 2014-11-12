@include('header')
<?php
/*if(!Session::has('id_mem')){
   return Redirect::to('/login');
}
else{
	$id_mem = Session::get('id_mem');
}*/


?>
	<div id= "panel">
		<ul class="nav nav-pills">
                <li id="home"><a href="<?php echo URL::to('/')?>/" >Trang chủ</a></li>                
				<li id="noti"><a href="<?php echo URL::to('/') ?>/thong-bao" >Thông báo</a></li>
				<li id="news"><a href="<?php echo URL::to('/') ?>/tin-tuc" >Tin tức</a></li>
				<li id="result"><a href="<?php echo URL::to('/') ?>/" >Kết quả đánh gíá</a></li>
				<li id="infor"><a href="<?php echo URL::to('/') ?>/thong-tin-doan-vien" >Thông tin đoàn viên</a></li>
				<li id="question"><a href="<?php echo URL::to('/') ?>/ask-and-answer" >Hỏi & Đáp</a></li>
               
                <li class="dropdown pull-right">
                    <?php if(!Session::has('id_dv')) {?>
                         <a style="min-width: 160px; max-height: 40px; margin-top:5px;" href="<?php echo URL::to('/') ?>/dang-nhap" class="dropdown-toggle">
                         Đăng nhập</a>
                    <?php } else { ?>
                    <a style="min-width: 160px; max-height: 40px; margin-top:5px;" href="<?php echo URL::to('/') ?>/thong-tin" data-toggle="dropdown" class="dropdown-toggle">
                    <?php  echo Session::get('name_dv');  ?><b class="caret" ></b></a>
                    <ul class="dropdown-menu">                    
                        <li><a style="min-width: 160px;" href="#">Đăng xuất</a></li>
                    </ul><?php }?>
                </li>
        </ul>
	</div>

	@yield('content')

@include('footer')
  
 </div>
</body>
</html>

@yield('script')
