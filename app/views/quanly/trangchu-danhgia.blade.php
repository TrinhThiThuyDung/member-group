@extends('layout.layout-manage')

@section('title')
Đánh giá
@endsection

@section('content')
<div class="content">
	<div id="page-content">
		<h2 id="page-title" style="margin-bottom: 30px;">Đánh giá đoàn viên</h2>
       

         <table>
					
					<tr>
						<th style="text-align:left;">Chọn học kỳ</th>
						
						<td style="text-align:left">
							<select id ="hocky" class="input_txt" name="kind">
			
								<option value = "1">Học kỳ 1</option>
								<option value = "2">Học kỳ 2</option>
								

							</select>
						</td>
					</tr>
				
				</table>
				<br>
				
				<hr>


<form method = "post" action ="">
        <table width="100%" border="1" style="margin-top:30px;" id="table-dg">
			<tr class="frame">
				
				<th style="width: 15%;">Mã đoàn viên</th>
				<th style="width: 20%;">Họ tên</th>
				<th style="width: 15%;">Lớp</th>
				<th style="width: 10%;">Đánh giá</th>
				
			</tr>
			<?php foreach ($members as $key => $value) {
				
			?>
			<tr style="background:#FFF">
				<td class="id"><?php echo $value->id; ?></td>
				<td><?php echo $value->fullname; ?></td>
				<td><?php echo $value->class; ?></td>
				<td><select  class="input_txt result" name="kind">
			
								<option value = "Xuất sắc">Xuất sắc</option>
								<option value = "Tốt">Tốt</option>
								<option value = "Khá">Khá</option>
								<option value = "Trung bình">Trung bình</option>
								<option value = "Yếu">Yếu</option>
								<option value = "Kém">Kém</option>
								

							</select></td>
				
			</tr>
			<?php }?>
		</table>
		<div align="left" style="margin-top:10px;">
					<button type="submit" class="btn btn-primary" id="button-dg">Đánh giá</button>
				</div>
     </div>
     </form>
</div>
@endsection

@section('script')
<script type="text/javascript">
$('table tbody').css("text-align","center");
$('table tbody tr th').css("text-align","center");
$('#assessment').addClass('active');
$('#home').addClass('active');
$(document).ready(function(){
	 var hostname = location.protocol+'//'+location.hostname;
            
        if (location.href.match('8000')) {
             hostname = hostname +':8000/';
        }

	$('#button-dg').click(function(){
		var hocky = $('#hocky').val();
		var array_reseult = new Array();
		var result = $('.result');
		for (var i = 0; i < result.length; i++) {
			var result_mem = {
				id: $(result[i]).parent().siblings('td.id').text(),
				result_dg: $(result[i]).val()
			}
			array_reseult.push(result_mem);
		};
        
        $.ajax({
        	type: 'post',
        	url: hostname+'/admin/cap-nhat-danh-gia',
        	data:{
        		hocky: hocky,
        		result: array_reseult
        	},
        	dataType: 'json',
        	success:function(data){
        		if(data==0){
        			alert("Đã có lỗi xảy ra");
        		}
        		else{
        			alert("Đã cập nhật đánh giá thành công");
        		}
        	}
        })
		return false;
	})
})

</script>
@endsection