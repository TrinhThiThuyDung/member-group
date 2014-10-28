@extends('layout.layout-member')

@section('title')
assessment result
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title">Assessment Results</h2>
				<b><font color="#000099">Member Information</font></b>
				<table width="50%" id="infor">
					<tr>
						<th>ID Member:</th><td>xxx</td>
					</tr>
					<tr>
						<th>Full Name:</th><td>xxx</td>
					</tr>
					<tr>
						<th>Birthday:</th><td>xxx</td>
					</tr>
					<tr>
						<th>Class:</th><td>xxx</td>
					</tr>
					<tr>
						<th>Date Join:</th><td>xxx</td>
					</tr>
				</table>
				<br />
	
				<hr />
				<b><font color="#000099">Assessment Table</font></b>
				<br />
				<table width="100%" id="result">
					<tr>
						<th style="width: 20%;">Years</th>
						<th style="width: 20%;">Result</th>
						<th style="width: 60%;">Comment</th>
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