@extends('layout.layout-manage')

@section('title')
Quản lý đoàn viên
@endsection

@section('content')

			<div id="page-content">
				<h2 id="page-title">THÊM DOÀN VIÊN</h2>
				<table width="70%">
					<tr style="background: #FFF;">
						<th width="20%">Chọn năm</th>
						<td style="text-align:left">
							<select class="input_txt" name="kind">
								
								<option value = "2014">2014</option>
								<option value = "2015">2015</option>
								<option value = "2016">2016</option>
								<option value = "2017">2017</option>
								<option value = "2018">2018</option>

							</select>
						</td>
					</tr>
					<tr style="background: #FFFde5;">
						<th width="200">Họ tên</th>
						<td style="text-align:left"><input id="name" type="text" name="ho_ten" class="input_txt w_200" /></td>
					</tr>
					<tr style="background: #FFF;">
						<th>Ngày sinh</th>
						<td style="text-align:left"><input id= "birth" type="date" name="ngay_sinh" class="input_txt w_200" ></td>
					</tr>
					<tr style="background: #FFFde5;">
						<th>Lớp</th>
						<td style="text-align:left">
							<select class="input_txt" name="class" id="class">
								
								<option value = "Việt Nhật A">Việt Nhật A</option>
								<option value = "Việt Nhật B">Việt Nhật B</option>
								<option value = "Việt Nhật C">Việt Nhật C</option>
								<option value = "ICT 1">ICT 1</option>
								<option value = "ICT 2">ICT 2</option>

							</select>
						</td>
					</tr>
					<tr style="background: #FFFde5;">
						<th>Khóa</th>
						<td style="text-align:left">
							<select class="input_txt" name="khoa" id="khoa">
								
								<option value = "56">56</option>
								<option value = "57">57</option>
								<option value = "58">58</option>
								<option value = "60">59</option>
								<option value = "60">60</option>

							</select>
						</td>
					</tr>
					<tr style="background: #FFF;">
						<th>Địa chỉ</th>
						<td style="text-align:left">
							<input id="address" type="text" name="dia_chi" class="input_txt w_200"/>
						</td>
					</tr>	
					<tr style="background: #FFFde5;">
						<th>Ngày vào đoàn</th>
						<td style="text-align:left"><input id="date" type="date" name="ngay_vao_doan" class="input_txt w_200" /></td>
					</tr>
					
				</table>
				<br>
				<div align="left">
					<input type="button" class="btn btn-primary" value="Thêm">
				</div>
			</div>
		
@endsection

@section('script')
<script type="text/javascript">
$('#home').addClass('active');
</script>
@endsection