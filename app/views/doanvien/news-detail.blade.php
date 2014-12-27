@extends('layout.layout-member')
@section('title')
<?php echo $news->title; ?>
@endsection

@section('content')

	<div id="page-content" style="min-height: 500px;">
		<h2 id="page-title">TIN TỨC</h2>

        <dl class="article-info" >
        <dd class="published"> Được đăng ngày thứ <?php echo $news->date; ?></dd>
        </dl>
        
        <p align="center" style="line-height: 1em; padding: 4px 0px; font-weight: bold;">
        	<?php echo $news->title; ?>
        </p>
    </br>
</br>
      
        <p><?php echo $news->content; ?></p>
        <p style="text-align: center;" ><img  src="<?php echo URL::to('/').'/images/news/'.$news->image; ?>"></p>
	</div>

@endsection