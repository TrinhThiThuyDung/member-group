@extends('layout.layout-member')

@section('title')
Kết quả đánh giá | Cổng thông tin Đoàn viên Thanh niên
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title">Kết quả đánh giá</h2>
				<b><font color="#000099">Đoàn viên</font></b>
				<table width="50%" id="infor">
					<tr>
						<th>Mã đoàn viên:</th><td>xxx</td>
					</tr>
					<tr>
						<th>Họ tên:</th><td>xxx</td>
					</tr>
					<tr>
						<th>Ngày sinh:</th><td>xxx</td>
					</tr>
					<tr>
						<th>Lớp - Khóa:</th><td>xxx</td>
					</tr>
					<tr>
						<th>Ngày vào đoàn:</th><td>xxx</td>
					</tr>
				</table>
				<br />
	
				<hr />
				<b><font color="#000099">Kết quả đánh giá</font></b>
				<br />
				<table width="100%" id="result">
					<tr>
						<th style="width: 20%;">Năm</th>
						<th style="width: 20%;">Kết quả</th>
						<th style="width: 60%;">Ghi chú</th>
					</tr>
					<tr>
						<td>2010</td>
						<td>bla bla</td>
						<td>bla bla</td>
					</tr>
					<tr>
						<td>2011</td>
						<td>bla bla</td>
						<td>bla bla</td>
					</tr>
					<tr>
						<td>2012</td>
						<td>bla bla</td>
						<td>bla bla</td>
					</tr>
				</table>
			</div>
		</div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
	$('table#infor tbody tr th').css("text-align","right");
	$('table#infor tbody tr td').css("text-align","left");

	$('table#result tbody tr').css("text-align","center");
	$('table#result tbody tr th').css({"text-align":"center"});
	$('table#result tbody tr td').css({"background":"#FFF"});
    $('#result').addClass('active');
})
</script>
@endsection