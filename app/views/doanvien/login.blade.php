@extends('layout.layout-member')

@section('title')
Đăng nhập | Cổng thông tin điện tử Đoàn viên Thanh niên
@endsection

@section('content')
<div class="content">
<div id="page-content">
	<div id="login">
		<h2 class="tit">Log in</h2>
			<div class="box_cont">			
				<dl>
					<dt id ="error"></dt>
					<form id="login_dv" method="post" action="<?php echo URL::to('/') ?>/dang-nhap-thanh-cong">
					<dt><label for="user"><h3>user name</h3></label></dt>
					<dd> <input name="id" required="Bạn phải nhập mã đoàn viên" class="input_txt" maxlength="100" type="text" id="user" width="300px"></dd>
					<dt><label for="pass"><h3>password</h3></label></dt>
					<dd><input name="pass" required="Bạn phải nhập mật khẩu" class="input_txt" type="password" id="userpass" width="300px"></dd>
					<dd class="other">
					<input type="submit" value="Đăng Nhập" class="btn btn-primary" id="ok">
					</form>
					</dd>
				</dl>
					<p style="text-align: right; margin-top:20px;"><a href="#">forget password?</a></p>
			</div>
	</div>
</div>
</div>

@endsection

@section('script')
<script type="text/javascript">

$('#home').addClass('active');
$(document).ready(function(){
	$('#login_dv').submit(function(){
		var id= $('#user').val();
		var pass = $('#userpass').val();

		$.ajax({
   	       type: 'post',
   	       url: 'http://localhost:8000/kiem-tra-dang-nhap/',
   	       data: 
   	       {
   	       	id_dv: id,
   	       	pass_dv:pass
   	       },
   	       dataType: 'json',
   	       success:function(data){
   	       	 if(data==0){

   	       	 	if(($('#error').val())==''){
   	       	 	$('#error').append("<p>Ten tai khoan khong ton tai!</p>");
   	       	 }
   	       	 }
   	       	 else{
   	       	 	document.forms["login_dv"].submit()
   	       	 }

   	       }
   	       
   });
		return false;
	});
	
   
});
</script>
@endsection