@include('header')

<body>
    <div class="container">
        <div class="header"></div>
	<div id= "panel">
		<ul class="nav nav-pills">
                <li id="home"><a href="<?php echo URL::to('/trang-chu')?>/" >Trang chủ</a></li>                
				<li id="noti"><a href="<?php echo URL::to('/') ?>/thong-bao" >Thông báo</a></li>
				<li id="news"><a href="<?php echo URL::to('/') ?>/tin-tuc" >Tin tức</a></li>
				<li id="result"><a href="<?php echo URL::to('/') ?>/ket-qua-danh-gia/" >Kết quả đánh gíá</a></li>
				<li id="infor"><a href="<?php echo URL::to('/') ?>/thong-tin-doan-vien" >Thông tin đoàn viên</a></li>
				<li id="question"><a href="<?php echo URL::to('/') ?>/ask-and-answer" >Hỏi & Đáp</a></li>
               
                <li class="dropdown pull-right">
                    <?php if(!Session::has('id_dv')) {?>
                         <a style="min-width: 160px; max-height: 40px; margin-top:5px;" href="<?php echo URL::to('/') ?>/dang-nhap/index" class="dropdown-toggle">
                         Đăng nhập</a>
                    <?php } else { ?>
                    <a style="min-width: 160px; max-height: 40px; margin-top:5px;" href="<?php echo URL::to('/') ?>/thong-tin" data-toggle="dropdown" class="dropdown-toggle">
                    <?php  echo Session::get('name_dv');  ?><b class="caret" ></b></a>
                    <ul class="dropdown-menu">                    
                        <li><a style="min-width: 160px;" href="{{Asset('/dang-xuat')}}">Đăng xuất</a></li>
                    </ul><?php }?>
                </li>
        </ul>
	</div>
    <div class="content">
    @yield('content')

   <div id="right" role="contentinfo">
    <div class="moduletable">
        <h3>
            <span class="backh">
                <span class="backh2">
                    <span class="backh3 mod_title">
                        <span class="mod_icon" style="background: url('{{Asset('/images/info.png')}}') no-repeat center;"></span>
                    LIÊN HỆ
                    </span>
                </span>
            </span>
        </h3>
        <div class="custome">
            <div style="padding:0px 15px;">
                <p style="text-align: justify;">

        Địa chỉ:  Đại học Bách khoa Hà Nội

<br></br>


        Điện thoại: (84-4) 3 123456789

<br></br>


        Fax :(84-4) 3 123456789

<br></br>


        Email: thuydung.kid@gmail.com
                </p>
            </div>
        </div>
    </div>
    <div class="moduletable">
        <h3>
            <span class="backh">
                <span class="backh2">
                    <span class="backh3 mod_title">
                        <span class="mod_icon" style="background: url('{{Asset('/images/link.png')}}') no-repeat center;"></span>
                    LIÊN KẾT
                    </span>
                </span>
            </span>
        </h3>
       <ul class="weblinks">
        <li><a rel="no follow" target="_blank" href="https://www.ctsv.hust.edu.vn">Trang Công Tác Sinh Viên</a></li>
        <li><a rel="no follow" target="_blank" href="https://www.dtdh.hust.edu.vn">Trang Đào Tạo Đại Học</a></li>
        <li><a rel="no follow" target="_blank" href="https://www.sis.hust.edu.vn">Trang Sinh Viên Bách Khoa</a></li>
        <li><a rel="no follow" target="_blank" href="https://www.soict.hust.edu.vn">Trang Viện Công Nghệ Thông Tin Và Truyền Thông</a></li>
       </ul>
    </div>
   </div>
	</div>
 </div>
@include('footer')
 
</body>
</html>

@yield('script')
