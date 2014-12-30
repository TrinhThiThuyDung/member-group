@extends('layout.layout-manage')

@section('title')
Danh sách đoàn viên yếu kém
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title">Danh Sách Đoàn Viên Yếu Kém</h2>
				
				<br />
				<table>
					<form method="post" action="">
					<tr>
						<th style="text-align:left;">Chọn học kỳ</th>
						
						<td style="text-align:left">
							<select id ="nam" class="input_txt" name="kind">
			
								<option value = "1">Học kỳ 1</option>
								<option value = "2">Học kỳ 2</option>
								<option value = "3">Cả năm</option>
								

							</select>
						</td>
					</tr>
					
				</table>
				<br>
				<div align="left">
					<input id="tim" type="submit" class="btn btn-primary" value="Lấy danh sách">
				</div>
			</form>
				<hr>
				<table width="100%" border="1" id="view">
				  <tr class="frame" id="title">
					<th style="width:10%; ">Mã đoàn viên</th>
					<th style="width:25%;text-align: center;">Họ tên</th>
					<th style="width:25%;text-align: center;">Lớp</th>
					<th style="width:20%;text-align: center;">Đánh giá kỳ 1</th>
					<th style="width:20%;text-align: center;">Đánh giá kỳ 2</th>
				  </tr>
				  <tr style="background:#FFF">
					
				  </tr>
				</table>
			</div>
		</div>
@endsection

@section('script')
<script type="text/javascript">
$('#list').addClass('active');
$('#fee').addClass('active');
$(document).ready(function(){
	var hostname = location.protocol+'//'+location.hostname;
            
       if (location.href.match('8000')) {
             hostname = hostname +':8000/';
       }
   $('#tim').click(function(){
     
     $('table tbody tr#title').siblings().remove();
   	var year = $('#nam').val();
   

   	$.ajax({
   		type: 'post',
   		url: hostname+'admin/danh-sach-yeu-kem',
   		data: {
   			year: year
   		},
   		dataType: 'json',
   		success:function(data){
   		
   			if(data==0){
   				alert("Không tìm thấy đoàn viên nào!");
   			}
   			else{
                 if(year==1){
                 	for (var i = 0; i < data.length ; i++) {
   					var html = "<tr style='background:#FFF'>"+
   					           "<td style='text-align: center;'>"+ data[i].id +"</td>"+
					           "<td style='text-align: center;'>"+data[i].fullname +"</td>"+
					           "<td style='text-align: center;'>"+data[i].class +"</td>"+
					          
					           "<td style='text-align: center;'>"+ data[i].ky1 +"</td>"+
					           
					            "<td style='text-align: center;'></td></tr>";
					 $('table#view').append(html);
					  
   				     };
                 }
                 else if(year==2){
                 	for (var i = 0; i < data.length ; i++) {
   					var html = "<tr style='background:#FFF'>"+
   					           "<td style='text-align: center;'>"+ data[i].id +"</td>"+
					           "<td style='text-align: center;'>"+data[i].fullname +"</td>"+
					           "<td style='text-align: center;'>"+data[i].class +"</td>"+
					          
					           "<td style='text-align: center;'></td>"+
					            "<td style='text-align: center;'>"+data[i].ky2+"</td></tr>";
					 $('table#view').append(html);
					  
   				     };
                 }
                 else{
                 	for (var i = 0; i < data.length ; i++) {
   					var html = "<tr style='background:#FFF'>"+
   					           "<td style='text-align: center;'>"+ data[i].id +"</td>"+
					           "<td style='text-align: center;'>"+data[i].fullname +"</td>"+
					           "<td style='text-align: center;'>"+data[i].class +"</td>"+
					          
					           "<td style='text-align: center;'>"+ data[i].ky1 +"</td>"+
					            "<td style='text-align: center;'>"+data[i].ky2+"</td></tr>";
					           
					 $('table#view').append(html);
					  
   				     };
                 }
   				
   			}

   		  }
   	   })
    return false;
   });
});
</script>
@endsection