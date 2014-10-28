@extends('layout.layout-manage')

@section('title')
login manage
@endsection

@section('content')
<div class="content">
<div id="page-content">
	<div id="login">
		<h2 class="tit">Log in</h2>
			<div class="box_cont">			
				<dl>
					<dt><label for="user"><h3>user name</h3></label></dt>
					<dd> <input name="data[User][email]" required="" class="input_txt" maxlength="100" type="text" id="User" width="300px"></dd>
					<dt><label for="pass"><h3>password</h3></label></dt>
					<dd><input name="data[User][password]" required="" class="input_txt" type="password" id="UserPassword" width="300px"></dd>
					<dd class="other">
					<input type="submit" value="Log in" class="btn btn-primary" name="ok">
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
</script>
@endsection