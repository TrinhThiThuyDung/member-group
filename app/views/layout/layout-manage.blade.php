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
                <li style="max-height: 40px;"><a href="<?php echo URL::to('/') ?>/admin/index">Home</a></li>    
				
                <li class="dropdown" id="news">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="max-height: 40px;">News Management<b  class="caret"></b></a>
                    <ul class="dropdown-menu">
						<li id="post"><a href="<?php echo URL::to('/') ?>/admin/post-news" >Post News</a></li>
                        <li id="edit"><a href="#" >Edit News</a></li>  
						<li id="del"><a href="#" >Delete News</a></li>
                    </ul>
                </li>
				<li id="assessment" ><a href="<?php echo URL::to('/') ?>/admin/assessment-class">Assessment</a></li>
				<li id="search" ><a href="<?php echo URL::to('/') ?>/admin/search-member">Search</a></li>
				<li class="dropdown" id="list" >
                    <a style="max-height: 40px;" href="#" data-toggle="dropdown" class="dropdown-toggle">Get List<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="good"><a href="<?php echo URL::to('/') ?>/admin/good-member-list" >Good Members List</a></li>  
						<li id="fee"><a href="<?php echo URL::to('/') ?>/admin/not-school-fee-member-list" >Tuition Fee List</a></li>
                    </ul>
                </li>
				<li id="add"><a href="<?php echo URL::to('/') ?>/admin/add-members" >Add Members</a></li>
				<li id="ask-answer"><a href="<?php echo URL::to('/') ?>/admin/ask-and-answer" >Ask and Answer</a></li>
                <li class="dropdown pull-right" >
                    <a style="min-width: 160px; max-height: 40px;" href="#" data-toggle="dropdown" class="dropdown-toggle">Tên quản lý <b  class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Log out</a></li>
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
