@extends('layout.layout-member')

 <?php 
  if(!Session::has('id_dv')){
      return Redirect::to('/error');
   }
   else{
	  $id_mem = Session::get('id_dv');
   }

?>

@section('title')
 <?php echo Session::get('name_dv'); ?> | Cổng thông tin Đoàn viên Thanh niên
@endsection

@section('content')
<div class="content">
	<div id="page-content">
		<h2 id="page-title">Member Information</h2>
			<table>
				<tr>
					<th>ID Member</th>
					<td><?php echo $id_mem; ?> </td>
				</tr>
				<tr>
					<th>Full Name</th>
					<td><?php echo $member[0]->fullname; ?></td>
				</tr>
				<tr>
					<th>Birthday</th>
					<td><?php echo $member[0]->birth; ?></td>
				</tr>
				<tr>
					<th>Class</th>
					<td><?php echo $member[0]->class; ?></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><?php echo $member[0]->address; ?> </td>
				</tr>	
				<tr>
					<th>Date Join</th>
					<td><?php echo $member[0]->date_assign; ?> </td>
				</tr>
			</table>
		<br>
	    <div align="left">
		    <input type="button" class="btn btn-primary" value="button">
		    <input type="button" class="btn btn-primary" value="button">
	    </div>
	</div>
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