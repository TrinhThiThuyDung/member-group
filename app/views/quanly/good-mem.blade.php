@extends('layout.layout-manage')

@section('title')
Danh sách đoàn viên gương mẫu
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title">Good Members List</h2>
				
				<br />
				
				<table width="100%" border="1" >
				  <tr class="frame" >
					<th style="width:10%; ">ID Member</th>
					<th style="width:20%;text-align: center;">Full Name</th>
					<th style="width:20%;text-align: center;">Class</th>
					<th style="width:20%;text-align: center;">Assessment</th>
					<th style="width:30%;text-align: center;">Comment</th>
				  </tr>
				  <tr style="background:#FFF">
					<td style="text-align: center;">123</td>
					<td style="text-align: center;">Văn Tuấn</td>
					<td style="text-align: center;">IS1-k54</td>
					<td style="text-align: center;">Tốt</td>
					<td style="text-align: center;">Em ấy học tốt</td>
				  </tr>
				</table>
			</div>
		</div>
@endsection

@section('script')
<script type="text/javascript">
$('#list').addClass('active');
$('#good').addClass('active');

</script>
@endsection