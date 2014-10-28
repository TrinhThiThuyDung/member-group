@extends('layout.layout-manage')

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
                    <button  type="submit" class="btn btn-primary bt-answer" >Answer</button>
                    </div>
                    

					</div>

					<hr>

				    				

				</div>
			</div>
	
@endsection
@section('script')
<script type="text/javascript">
$('#answer').addClass('active');
$(document).ready(function(){
	$('button.bt-answer').click(function(){
       var parent = $(this).parent();
       var html = "<div align='left' style='left-margin:20%'; >"+
					"<textarea style='padding-top: 10px;' id='text-answer' class='textarea-xxlarge' placeholder='Enter your answer' >"+
					"</textarea><br/>"+
					"<button id='bt-answer' type='submit' class='btn btn-primary'>Answer</button></div>";
		parent.append(html);
		$(this).hide();
	});
});
</script>
@endsection