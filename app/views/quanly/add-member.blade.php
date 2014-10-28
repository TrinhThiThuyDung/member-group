@extends('layout.layout-manage')

@section('title')
add member
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title">Add Members</h2>
				<table width="70%">
					<tr style="background: #FFF;">
						<th width="20%">ID Member</th>
						<td style="text-align:left"><input type="text" name="ma_doan_vien" class="input_txt w_200" /></td>
					</tr>
					<tr style="background: #FFFde5;">
						<th width="200">Full Name</th>
						<td style="text-align:left"><input type="text" name="ho_ten" class="input_txt w_200" /></td>
					</tr>
					<tr style="background: #FFF;">
						<th>Birthday</th>
						<td style="text-align:left"><input type="date" name="ngay_sinh" class="input_txt w_200" ></td>
					</tr>
					<tr style="background: #FFFde5;">
						<th>Class</th>
						<td style="text-align:left"><input type="text" name="lop_khoa" class="input_txt w_200" /></td>
					</tr>
					<tr style="background: #FFF;">
						<th>Address</th>
						<td style="text-align:left"><input type="text" name="dia_chi" class="input_txt w_200"/></td>
					</tr>	
					<tr style="background: #FFFde5;">
						<th>Date Join</th>
						<td style="text-align:left"><input type="date" name="ngay_vao_doan" class="input_txt w_200" /></td>
					</tr>
					
				</table>
				<br>
				<div align="left">
					<input type="button" class="btn btn-primary" value="Submit">
				</div>
			</div>
		</div>
@endsection

@section('script')
<script type="text/javascript">
$('#add').addClass('active');
</script>
@endsection