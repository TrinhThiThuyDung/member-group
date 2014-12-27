@extends('layout.layout-manage')

@section('title')
Đánh giá
@endsection

@section('content')
<div class="content">
	<div id="page-content">
		<h2 id="page-title" style="margin-bottom: 30px;">Assessment Class</h2>
        <table style="margin-bottom: 30px;">
			<tr>
				<th style="text-align:left;">Class</th>
			</tr>
			<tr>
				<td style="text-align:left">KT-01</td>
			</tr>
			<tr>
				<td style="text-align:left">KT-02</td>
			</tr>
		</table>
        <table width="100%" border="1" style="margin-top:30px;">
			<tr class="frame">
				<th style="width: 15%;">Class</th>
				<th style="width: 15%;">Id Member</th>
				<th style="width: 20%;">Full Name</th>
				<th style="width: 10%;">Weak</th>
				<th style="width: 10%;">Average</th>
				<th style="width: 10%;">Quite</th>
				<th style="width: 10%;">Good</th>
				<th style="width: 10%;">Excellent</th>
			</tr>
			<tr style="background:#FFF">
				<td>IS1-k54</td>
				<td>123</td>
				<td>Văn Tuấn</td>
				<td><input name="assessment" type="radio"/></td>
				<td><input name="assessment" type="radio"/></td>
				<td><input name="assessment" type="radio"/></td>
				<td><input name="assessment" type="radio"/></td>
				<td><input name="assessment" type="radio"/></td>
			</tr>
		</table>
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