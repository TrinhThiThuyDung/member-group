@extends('layout.layout-member')

 <?php 
  /*if(!Session::has('id_mem')){
      return Redirect::to('/login');
   }
   else{
	  $id_mem = Session::get('id_mem');
   }*/

?>

@section('title')
 <?php echo Session::get('name_mem'); ?>
@endsection

@section('content')
<div class="content">
	<div id="page-content">
		<h2 id="page-title">Member Information</h2>
			<table>
				<tr>
					<th>ID Member</th>
					<td>1234</td>
				</tr>
				<tr>
					<th>Full Name</th>
					<td>Ngô Hưng</td>
				</tr>
				<tr>
					<th>Birthday</th>
					<td>1991/04/02</td>
				</tr>
				<tr>
					<th>Class</th>
					<td>as1-k54</td>
				</tr>
				<tr>
					<th>Address</th>
					<td>Hà nội</td>
				</tr>	
				<tr>
					<th>Date Join</th>
					<td>2006/04/06</td>
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