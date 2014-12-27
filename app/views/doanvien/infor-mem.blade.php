@extends('layout.layout-member')

 <?php 
  if(!Session::has('id_dv')){
      return Redirect::to('/dang-nhap/index');
   }
   else{
	  $id_mem = Session::get('id_dv');
   }

?>

@section('title')
 <?php echo Session::get('name_dv'); ?> | Cổng thông tin Đoàn viên Thanh niên
@endsection

@section('content')

	<div id="page-content">
		<h2 id="page-title">THÔNG TIN ĐOÀN VIÊN</h2>
			<table>
				<tr>
					<th>Mã đoàn viên</th>
					<td><?php echo $id_mem; ?> </td>
				</tr>
				<tr>
					<th>Họ và tên</th>
					<td><?php echo $member[0]->fullname; ?></td>
				</tr>
				<tr>
					<th>Ngày sinh</th>
					<td><?php echo $member[0]->birth; ?></td>
				</tr>
				<tr>
					<th>Lớp - Khóa</th>
					<td><?php echo $member[0]->class; ?></td>
				</tr>
				<tr>
					<th>Địa chỉ</th>
					<td><?php echo $member[0]->address; ?> </td>
				</tr>	
				<tr>
					<th>Ngày vào đoàn</th>
					<td><?php echo $member[0]->date_assign; ?> </td>
				</tr>
			</table>
		<br>
	    
	</div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
	$('tr:odd').css("background", "#FFF");
	$('tr:even').css("background","#FFFde5");
	$('#infor').addClass('active');
})
</script>
@endsection