@extends('layout.layout-member')

@section('title')
Hỏi Đáp
@endsection

@section('content')

			<div id="page-content">

				<h2 id="page-title">HỎI ĐÁP</h2>
					<hr>
                      <?php $total = count($ask);
                    	for ($i=0; $i < $total; $i++) {
                    	 ?>
					
                    <div class="ask-asnwer" >
                    	
                    	<div class="ask">
                    <b>
						Câu hỏi <?php echo $i+1;?>:
					</b>
					<p><?php echo $ask[$i]->ask; ?>?</p>
                   
                    </div>
                    <div class="answer" style="padding-left: 10px;">
					<b>
						Trả lời:
					</b>
					<p><?php if($ask[$i]!=null){echo $ask[$i]->answer;} ?></p>
					
					</div>

					</div>

					<hr>
					<?php }?>

				    <b><font color="#000099">Đặt câu hỏi</font></b>
					<br />
					<br />	
					<form id="" method="get" action="">		
					<div align="left" style="left-margin:20%">
						<textarea id="question" class="textarea-xxlarge" placeholder="Đặt câu hỏi" ></textarea>
						<br/>
						<button id="bt-ask" type="submit" class="btn btn-primary">Hỏi</button>
					</div>
					</form>		
				</div>
		
	
@endsection

@section('script')
<script type="text/javascript">
$('#question').addClass('active');

$(document).ready(function(){
	$('b').css({
	'margin-bottom': '10px', 
	'text-align':'left', 
	'padding-top':'10px', 
	'padding-bottom':'10px',
	'font-family': 'serif'});

	$('#bt-ask').click(function(){
		var question = $('#question').val();
		if(question!=""){
           
		}
		else{
			return false;
		}
	});
});
</script>
@endsection