@extends('layout.layout-manage')

@section('title')
Đánh giá
@endsection

@section('content')
<div class="content">
	<div id="page-content">
		<h2 id="page-title" style="margin-bottom: 30px;">Đánh giá đoàn viên</h2>
        <table style="margin-bottom: 30px;">
			<tr>
				<th style="text-align:left;">Lớp</th>
			</tr>
			<tr>
				<td style="text-align:left">
					<select class="input_txt" name="class" id="class">
								
								<option value = "Việt Nhật A">Việt Nhật A</option>
								<option value = "Việt Nhật B">Việt Nhật B</option>
								<option value = "Việt Nhật C">Việt Nhật C</option>
								<option value = "ICT 1">ICT 1</option>
								<option value = "ICT 2">ICT 2</option>

							</select></td>
			</tr>
			
		</table>
        <table width="100%" border="1" style="margin-top:30px;">
			<tr class="frame">
				<th style="width: 15%;">Lớp</th>
				<th style="width: 15%;">Mã đoàn viên</th>
				<th style="width: 20%;">Họ tên</th>
				<th style="width: 10%;">Yếu</th>
				<th style="width: 10%;">Trung bình</th>
				<th style="width: 10%;">Khá</th>
				<th style="width: 10%;">Tốt</th>
				<th style="width: 10%;">Xuất sắc</th>
			</tr>
			<tr style="background:#FFF">
				<td>Việt Nhật A</td>
				<td>20111336</td>
				<td>Trịnh Thị Thùy Dung</td>
				<td><input name="assessment" type="radio"/></td>
				<td><input name="assessment" type="radio"/></td>
				<td><input name="assessment" type="radio"/></td>
				<td><input name="assessment" type="radio"/></td>
				<td><input name="assessment" type="radio"/></td>
			</tr>
		</table>
		<div align="left" style="margin-top:10px;">
					<button type="submit" class="btn btn-primary" id="search_button">Đánh giá</button>
				</div>
     </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$('table tbody').css("text-align","center");
$('table tbody tr th').css("text-align","center");
$('#assessment').addClass('active');


</script>
@endsection