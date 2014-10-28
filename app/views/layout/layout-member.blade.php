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
                <li id="home"><a href="#" >Home</a></li>                
				<li id="noti"><a href="#" >Notification</a></li>
				<li id="news"><a href="#" >News</a></li>
				<li id="result"><a href="<?php echo URL::to('/') ?>/assessment-result" >Assessment Results</a></li>
				<li id="infor"><a href="<?php echo URL::to('/') ?>/infor-mem" >Your Information</a></li>
				<li id="question"><a href="<?php echo URL::to('/') ?>/ask-and-answer" >Ask and Answer</a></li>
                <li class="dropdown pull-right">
                    <a style="min-width: 160px; max-height: 40px; margin-top:5px;" href="#" data-toggle="dropdown" class="dropdown-toggle">Tên đoàn viên<?php  //echo Session::get('name_mem');  ?><b class="caret" ></b></a>
                    <ul class="dropdown-menu">                    
                        <li><a style="min-width: 160px;" href="#">Log Out</a></li>
                    </ul>
                </li>
        </ul>
	</div>
</div>
	@yield('content')

@include('footer')
  
 </div>
</body>
</html>

@yield('script')
