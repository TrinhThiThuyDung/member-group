@extends('layout.layout-manage')

@section('title')
Đăng nhập 
@endsection

@section('content')

<div id="page-content"  style="width: 100%;">
	<div id="login">
		<h2 class="tit">Đăng nhập Quản lý</h2>
		<form id="login-admin" method="post" action="<?php echo URL::to('/') ?>/admin/dang-nhap/dang-nhap-thanh-cong-admin">
			<div class="box_cont">			
				<dl>
					<dt id ="error" style="font-size: 13px; color: red;">

					</dt>
					<dt><label for="user"><h3>Tên đăng nhập</h3></label></dt>
					<dd> <input name="username" required="" class="input_txt" maxlength="100" type="text" id="user" width="300px"></dd>
					<dt><label for="pass"><h3>Mật khẩu</h3></label></dt>
					<dd><input name="password" required="" class="input_txt" type="password" id="password" width="300px"></dd>
					<dd class="other">
					<input type="submit" value="Đăng nhập" class="btn btn-primary" name="ok">
					</dd>
				</dl>
					
			</div>
			</form>
	</div>
</div>


@endsection

@section('script')
<script type="text/javascript">
$('#home').addClass('active');
$(document).ready(function(){
	$('#login-admin').submit(function(){
		var username = $('#user').val();
		var pass = $('#password').val();
       
		$.ajax({
   	       type: 'post',
   	       url: '{{Asset("admin/dang-nhap/kiem-tra-dang-nhap-admin/")}}',
   	       data: 
   	       {
   	       	user: username,
   	       	pass :pass
   	       },
   	       dataType: 'json',
   	       success:function(data){
   	       	 if(data==0){

   	       	 	$('#error').html("");
   	       	 	$('#error').append("<p>Tên đăng nhập hoặc mật khẩu bị sai!</p>");
   	     
   	       	 }
   	       	 else{
   	       	 	document.forms["login-admin"].submit()
   	       	 }

   	       }
   	       
   });
		return false;
	});
	
   
});
</script>
@endsection