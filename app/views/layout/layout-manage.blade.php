@include('header')
<?php
/*if(!Session::has('id_mana')){
   return Redirect::to('/login');
}
else{
	$id_mem = Session::get('id_mana');
}*/
?>
<div id="panel">
            <ul class="nav nav-pills">
                <li style="max-height: 40px;"><a href="<?php echo URL::to('/') ?>/admin/index">Trang chủ</a></li>    
				<li id="assessment" ><a href="<?php echo URL::to('/') ?>/admin/">Thông tin quản lý</a></li>
                <li class="dropdown" id="news">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="max-height: 40px;"> Quản lý tin   <b  class="caret"></b></a>
                    <ul class="dropdown-menu">
						<li id="post"><a href="<?php echo URL::to('/') ?>/admin/post-news" >Đăng tin</a></li>
                        <li id="edit"><a href="#" >Sửa tin</a></li>  
						<li id="del"><a href="#" >Xóa tin</a></li>
                    </ul>
                </li>
				<li id="assessment" ><a href="<?php echo URL::to('/') ?>/admin/assessment-class">Đánh giá</a></li>
				<li id="search" ><a href="<?php echo URL::to('/') ?>/admin/search-member">Tìm kiếm</a></li>
				<li class="dropdown" id="list" >
                    <a style="max-height: 40px;" href="#" data-toggle="dropdown" class="dropdown-toggle">Lấy danh sách<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="good"><a href="<?php echo URL::to('/') ?>/admin/good-member-list" >Đoàn viên ưu tú </a></li>  
						<li id="fee"><a href="<?php echo URL::to('/') ?>/admin/not-school-fee-member-list" >Đoàn viên yếu kém</a></li>
                    </ul>
                </li>
				<li id="add"><a href="<?php echo URL::to('/') ?>/admin/add-members" >Thêm đoàn viên</a></li>
				<li id="ask-answer"><a href="<?php echo URL::to('/') ?>/admin/ask-and-answer" >Hỏi & Trả lời</a></li>
                <li class="dropdown pull-right" >
                    <a style="min-width: 160px; max-height: 40px;" href="#" data-toggle="dropdown" class="dropdown-toggle">Tên quản lý <b  class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div>
   
        @yield('content')

@include('footer')
  
 </div>
</body>
</html>

@yield('script')
