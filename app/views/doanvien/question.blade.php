@extends('layout.layout-member')

@section('title')
ask and answer
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title">Ask and Asnwer</h2>

					<hr>
                    <div id="ask-asnwer">
                    	<div class="ask">
                    <b>
						Question:
					</b>
					<p>cho e hoi... nhung sinh vien thuoc dien mien 100% hoc phi tai sao van phai dong hoc phi a? khi nao thi duoc nhan lai va lam sao de nhan lai tien hoc phi a?</p>
                   
                    </div>
                    <div class="answer" style="padding-left: 10px;">
					<b>
						Answer:
					</b>
					<p>[Căn cứ theo Nghị định số 49/2010/NĐ-CP ngày 14/5/2010 do Chính phủ ban hành quy định về miễn, giảm học phí, hỗ trợ chi phí học tập và cơ chế thu, sử dụng học phí đối với cơ sở giáo dục thuộc hệ thống giáo dục quốc dân từ năm học 2010-2011 đến năm học 2014-2015 thì các em sinh viên diện CĐCS theo qui định phải nộp học phí cho các trường ĐH và sau đó nhận lại kinh phí hỗ trợ của Nhà nước tại địa phương.
                       Nhà trường đang hoàn chỉnh nội dung Hướng dẫn cụ thể về việc truy thu học phí HK1, nộp học phí HK2 và cách làm giấy xác nhận học phí. Em chú ý xem thông báo tiếp theo trên Cổng thông tin CTSV để thực hiện]</p>
					
					</div>

					</div>

					<hr>

				    <b><font color="#000099">Question</font></b>
					<br />
					<br />					
					<div align="left" style="left-margin:20%">
						<textarea id="question" class="textarea-xxlarge" placeholder="Enter your question" ></textarea>
						<br/>
						<button id="bt-ask" type="submit" class="btn btn-primary">Ask</button>
					</div>
				</div>
			</div>
	
@endsection

@section('script')
<script type="text/javascript">
$('#question').addClass('active');
$('b').css({
	'margin-bottom': '10px', 
	'text-align':'left', 
	'padding-top':'10px', 
	'padding-bottom':'10px',
	'font-family': 'serif'});
}})
$(document).ready(function(){
	$('#bt-ask').click(function(){
		var question = $('textarea#question').val();
		if(question!=""){
			var html="<div class='ask'><b>Question:</b><p>"+question+
			"</p></div><button class='bt-answer' type='submit' class='btn btn-primary'>Answer</button>";
            $('#ask-asnwer').append(html);
            $('textarea#question').val("");
		}
        
	});
	
});
</script>
@endsection