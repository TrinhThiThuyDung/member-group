@extends('layout.layout-manage')

@section('title')
Tìm kiếm đoàn viên
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title">TÌM KIẾM ĐOÀN VIÊN</h2>
				<table>
					<form method="get" action = "">
					<tr>
						<th style="text-align:left;">Tìm theo mã đoàn viên</th>
						<td style="text-align:left"><input id="ma" type="text" name="tea_name" class="input_txt w_200"/></td>
					</tr>
					<tr>
						<th style="text-align:left;">Tìm theo Tên</th>
						<td style="text-align:left"><input id="name" type="text" name="tea_name" class="input_txt w_200"/></td>
					</tr>
					<tr>
						<th style="text-align:left;">Tìm theo Lớp</th>
						<td style="text-align:left"><input id="class" type="text" name="tea_name" class="input_txt w_200"/></td>
					</tr>
					<tr>
						<th style="text-align:left;">Tìm theo Khóa</th>
						<td style="text-align:left"><input id= "khoa" type="text" name="tea_name" class="input_txt w_200"/></td>
					</tr>

				</table>
				<div align="left" style="margin-top:10px;">
					<button type="submit" class="btn btn-primary" id="search_button">Tìm kiếm</button>
				</div>
			</form> 
				<br />
				<p align="right" id="sum"></p>
				<table width="100%" border="1" id="view">
				  <tr class="frame" id="title">
					<th style="width: 10%">Mã đoàn viên</th>
					<th style="width: 20%">Họ tên</th>
					<th style="width: 15%">Ngày sinh</th>
					<th style="width: 10%">Lớp</th>
					<th style="width: 10%">Khóa</th>
					<th style="width: 15%">Địa chỉ</th>
					<th style="width: 15%">Ngày vào đoàn</th>
					
				  </tr>
				  
				</table>
			</div>
		</div>
	@endsection

@section('script')
<script type="text/javascript">
$('#home').addClass('active');
$('#search').addClass('active');

$(document).ready(function(){
	

      var hostname = location.protocol+'//'+location.hostname;
            
        if (location.href.match('8000')) {
             hostname = hostname +':8000/';
        }

    $('#search_button').click(function(){
    var id = $('#ma').val();
	var name = $('#name').val();
	var lop = $('#class').val();
	var khoa = $('#khoa').val();
 $('table tbody tr#title').siblings().remove();
  
    	var link = hostname+'/admin/tim-kiem?id='+id+'&name='+name+'&lop='+lop+'&khoa='+khoa;
    	$.ajax({
		
		type: 'get',
        url: link,
        dataType: 'json',
        success:function(data){
           if(data==0){
              $('#sum').html("<b>Không tìm thấy đoàn viên</b>");
           }
           else{
           	for (var i = 0; i < data.length ; i++) {
   					var html = "<tr style='background:#FFF'>"+
   					           "<td style='text-align: center;'>"+ data[i].id +"</td>"+
					           "<td style='text-align: center;'>"+data[i].fullname +"</td>"+
					           "<td style='text-align: center;'>"+data[i].birth +"</td>"+
					          
					           "<td style='text-align: center;'>"+ data[i].class +"</td>"+
					           
					            "<td style='text-align: center;'>"+data[i].khoa+"</td>"+
					            "<td style='text-align: center;'>"+ data[i].address +"</td>"+
					            "<td style='text-align: center;'>"+ data[i].date_assign +"</td></tr>";
					 $('table#view').append(html);
					  
   				     };
           }
        }


	 })
    	return false;
   })
	
})

</script>
@endsection