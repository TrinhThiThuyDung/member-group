@extends('layout.layout-manage')

@section('title')
Tìm kiếm đoàn viên
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title">Search Member Information</h2>
				<table>
					<tr>
						<th style="text-align:left;">ID Member</th>
						<td style="text-align:left"><input type="text" name="tea_name" class="input_txt w_200"/></td>
					</tr>
					<tr>
						<th style="text-align:left;">Name</th>
						<td style="text-align:left"><input type="text" name="tea_name" class="input_txt w_200"/></td>
					</tr>
					<tr>
						<th style="text-align:left;">Class</th>
						<td style="text-align:left"><input type="text" name="tea_name" class="input_txt w_200"/></td>
					</tr>
				</table>
				<div align="left" style="margin-top:10px;">
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
				<br />
				<p align="right"><b>Found x member</b></p>
				<table width="100%" border="1">
				  <tr class="frame">
					<th style="width: 10%">ID Member</th>
					<th style="width: 20%">Full Name</th>
					<th style="width: 20%">Birthday</th>
					<th style="width: 20%">Class</th>
					<th style="width: 20%">Address</th>
					<th style="width: 10%">Date Join Group</th>
					
				  </tr>
				  <tr style="background:#FFF">
					<td>123</td>
					<td>Văn Tuấn</td>
					<td>20/10/1991</td>
					<td>IS1-k54</td>
					<td>Hà nội</td>
					<td>21/12/2005</td>
					
				  </tr>
				</table>
			</div>
		</div>
	@endsection

@section('script')
<script type="text/javascript">
$('#search').addClass('active');


</script>
@endsection