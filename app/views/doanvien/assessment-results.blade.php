@extends('layout.layout-member')
<?php 
  if(!Session::has('id_dv')){
      return Redirect::to('/dang-nhap');
   }
 else{
 	$name = Session::get('name_dv');
 }
?>
@section('title')
Kết quả đánh giá 
@endsection

@section('content')

			<div id="page-content">
				<h2 id="page-title">KẾT QUẢ ĐÁNH GIÁ</h2>
				<b><font color="#000099">Đoàn viên: <?php echo $name; ?></font></b>
				<table width="50%" id="infor">
					<tr>
						<th>Mã đoàn viên:</th><td><?php echo $result[0]->id_mem; ?></td>
					</tr>
					<tr>
						<th>Họ tên:</th><td><?php echo $name; ?></td>
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
						<td>Năm thứ nhất</td>
						<td><?php if($result[0]->nam_1!=null){
							     echo $result[0]->nam_1;}else{echo "Chưa có đánh giá";} ?></td>
						<td>Không có</td>
					</tr>
					<tr>
						<td>Năm thứ hai</td>
						<td><?php if($result[0]->nam_2!=null){
							     echo $result[0]->nam_2;}else{echo "Chưa có đánh giá";}?></td>
						<td>Không có</td>
					</tr>
					<tr>
						<td>Năm thứ ba</td>
						<td><?php if($result[0]->nam_3!=null){
							     echo $result[0]->nam_3;}else{echo "Chưa có đánh giá";}?></td>
						<td>Không có</td>
					</tr>
					<tr>
						<td>Năm thứ tư</td>
						<td><?php if($result[0]->nam_4!=null){
							     echo $result[0]->nam_4;}else{echo "Chưa có đánh giá";}?></td>
						<td>Không có</td>
					</tr>
					<tr>
						<td>Năm thứ năm</td>
						<td><?php if($result[0]->nam_5!=null){
							     echo $result[0]->nam_5;}else{echo "Chưa có đánh giá";}?></td>
						<td>Không có</td>
					</tr>
				</table>
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