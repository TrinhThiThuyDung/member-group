@extends('layout.layout-manage')

@section('title')
Thêm đoàn viên
@endsection

@section('content')

			<div id="page-content">
				<h2 id="page-title">THÊM DOÀN VIÊN</h2>
				<table width="70%">
					<form method="post" action="">
					<tr style="background: #FFF;">
						<th width="20%">Chọn năm</th>
						<td style="text-align:left">
							<select id ="nam" class="input_txt" name="kind">
								
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
						<td style="text-align:left"><input required="" id="name" type="text" name="ho_ten" class="input_txt w_200" /></td>
					</tr>
					<tr style="background: #FFF;">
						<th>Ngày sinh</th>
						<td style="text-align:left"><input required="" id= "birth" type="date" name="ngay_sinh" class="input_txt w_200" ></td>
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
							<input required="" id="address" type="text" name="dia_chi" class="input_txt w_200"/>
						</td>
					</tr>	
					<tr style="background: #FFFde5;">
						<th>Ngày vào đoàn</th>
						<td style="text-align:left"><input required="" id="date" type="date" name="ngay_vao_doan" class="input_txt w_200" /></td>
					</tr>
					
				</table>
				<br>
				<div align="left">
					<input id="add_mem" type="submit" class="btn btn-primary" value="Thêm">
				</div>
				</form>
			</div>
		
@endsection

@section('script')
<script type="text/javascript">
$('#add').addClass('active');
$(document).ready(function(){

    
    var hostname = location.protocol+'//'+location.hostname;
            
       if (location.href.match('8000')) {
             hostname = hostname +':8000/';
       }

  $('#add_mem').click(function(){
  	var nam = $('#nam').val();
	var name = $(':input#name').val();
	var birth = $(':input#birth').val();
	var lop = $('#class').val();
	var khoa = $('#khoa').val();
	var address = $(':input#address').val();
	var date = $(':input#date').val();

	var data = {
		nam: nam,
		name: name,
		birth: birth,
		lop: lop,
		khoa: khoa,
		address: address,
		date:date
	};
      $.ajax({
      	type: 'post',
      	url: hostname+'admin/them-moi',
      	data: {
      		data: data
      	},
      	dataType: 'json',
      	success:function(data){
      		if(data==1){
      			$(':input#name').val("");
      			$(':input#birth').val("");
      			$(':input#address').val("");
      			$(':input#date').val("");

      		alert("Đã thêm đoàn viên thành công");
      	   }
      	}
      });
     return false;
  });
})
</script>
@endsection