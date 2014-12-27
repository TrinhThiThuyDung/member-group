@extends('layout.layout-member')

@section('title')
Đăng nhập 
@endsection

@section('content')

<div id="page-content">
	<div id="login">
		<h2 class="tit">Đăng nhập</h2>
			<div class="box_cont">			
				<dl>
					<dt id ="error" style="font-size: 13px; color: red;">

					</dt>
					<form id="login_dv" method="get" action="<?php echo URL::to('/') ?>/dang-nhap/dang-nhap-thanh-cong">
					<dt><label for="user"><h3>Mã đoàn viên</h3></label></dt>
					<dd> <input name="id" required="Bạn phải nhập mã đoàn viên" class="input_txt" maxlength="100" type="text" id="user" width="300px"></dd>
					<dt><label for="pass"><h3>Mật khẩu</h3></label></dt>
					<dd><input name="pass" required="Bạn phải nhập mật khẩu" class="input_txt" type="password" id="userpass" width="300px"></dd>
					<dd class="other">
					<input type="submit" value="Đăng Nhập" class="btn btn-primary" id="ok">
					</form>
					</dd>
				</dl>
					
			</div>
		</div>

	</div>
@endsection

@section('script')
<script type="text/javascript">

$('#home').addClass('active');
$(document).ready(function(){
	$('#login_dv').submit(function(){
		var id = $('#user').val();
		var pass = $('#userpass').val();
       
		$.ajax({
   	       type: 'post',
   	       url: '{{Asset("dang-nhap/kiem-tra-dang-nhap")}}',
   	       data: 
   	       {
   	       	id_dv: id,
   	       	pass_dv:pass
   	       },
   	       dataType: 'json',
   	       success:function(data){
   	       	 if(data==0){

   	       	 	$('#error').html("");
   	       	 	$('#error').append("<p>Mã số sinh viên hoặc mật khẩu bị sai!</p>");
   	     
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