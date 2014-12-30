@include('header')
<?php
if(Session::has('id_admin')){
   $id_admin = Session::get('id_admin');
}
else{
    $id_admin=0;
}
?>
<body>
    <div class="container">
        <div class="header"></div>
        <div class="content">
           <div id="panel">
            <ul class="nav nav-pills">
                <li id="home" style="max-height: 40px;"><a href="<?php echo URL::to('/') ?>/admin/trang-chu">Trang chủ</a></li>
               <?php if($id_admin==2){ ?>

               
               <li id="post" ><a href="<?php echo URL::to('/') ?>/admin/dang-tin/">Đăng tin</a></li>
              
               
               
            <?php }elseif($id_admin==1){ ?>
				
				<li id="search" ><a href="<?php echo URL::to('/') ?>/admin/tim-kiem-doan-vien">Tìm kiếm đoàn viên</a></li>
				<li class="dropdown" id="list" >
                    <a style="max-height: 40px;" href="#" data-toggle="dropdown" class="dropdown-toggle">Lấy danh sách<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="good"><a href="<?php echo URL::to('/') ?>/admin/danh-sach-doan-vien-guong-mau" >Đoàn viên ưu tú </a></li>  
						<li id="fee"><a href="<?php echo URL::to('/') ?>/admin/danh-sach-doan-vien-yeu-kem" >Đoàn viên yếu kém</a></li>
                    </ul>
                </li>
				<li id="add"><a href="<?php echo URL::to('/') ?>/admin/them-doan-vien" >Thêm đoàn viên</a></li>
            <?php }elseif($id_admin==3){ ?>
                
                <li id="assessment" ><a href="<?php echo URL::to('/') ?>/admin/assessment-class">Đánh giá</a></li>
 
            <?php } elseif($id_admin==4){ ?>
                
				<li id="ask-answer"><a href="<?php echo URL::to('/') ?>/admin/ask-and-answer" >Hỏi & Trả lời</a></li>
               <?php }?>
                <?php if(Session::has('id_admin')){ 
                    $fullname = Session::get('fullname'); ?>
                <li class="dropdown pull-right" >
                    <a style="min-width: 160px; max-height: 40px;" href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo $fullname; ?> <b  class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{Asset('/admin/dang-xuat/')}}">Đăng xuất</a></li>
                    </ul>
                </li>
                <?php } ?>

            </ul>
        </div>
         @yield('content')
</div>
</div>
@include('footer')
  
 
</body>
</html>

@yield('script')
