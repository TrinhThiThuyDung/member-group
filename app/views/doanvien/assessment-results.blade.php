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
						<th style="width: 30%;">Học kỳ</th>
						<th style="width: 70%;">Kết quả</th>
						
					</tr>
					<tr>
						<td>Học kỳ 1</td>
						<td><?php if($result[0]->ky1!=null){
							     echo $result[0]->ky1;}else{echo "Chưa có đánh giá";} ?></td>
						
					</tr>
					<tr>
						<td>Học kỳ 2</td>
						<td><?php if($result[0]->ky2!=null){
							     echo $result[0]->ky2;}else{echo "Chưa có đánh giá";}?></td>
						
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