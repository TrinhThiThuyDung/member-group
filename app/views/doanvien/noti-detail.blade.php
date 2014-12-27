@extends('layout.layout-member')
@section('title')
<?php echo $noti->title; ?>
@endsection

@section('content')

	<div id="page-content" style="min-height: 500px;">
		<h2 id="page-title">THÔNG BÁO</h2>

        <dl class="article-info" >
        <dd class="published"> Được đăng ngày thứ <?php echo $noti->date; ?></dd>
        </dl>
        
        <p align="center" style="line-height: 1em; padding: 4px 0px; font-weight: bold;">
        	<?php echo $noti->title; ?>
        </p>
    </br>
</br>
      
        <p><?php echo $noti->content; ?></p>
	</div>

@endsection