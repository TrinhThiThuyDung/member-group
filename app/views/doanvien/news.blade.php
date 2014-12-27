@extends('layout.layout-member')
@section('title')
Tin tức | Cổng thông tin Đoàn Viên Thanh niên
@endsection

@section('content')
<div id="page-content">
		<h2 id="page-title">TIN TỨC</h2>
		<div class="blog">
            <?php  $total = count($news); 
            for ($i=0; $i < $total ; $i++) { 
            ?>
            <div class="items-row cols-1 row-0">
                <div class="item column-1">
                    <h2><a href="<?php echo URL::to('/').'/tin-tuc/'.$news[$i]->id; ?>"><?php echo $news[$i]->title; ?></a></h2>
                </div>
                <dl class="article-info">
                    <dd class="published">Được đăng ngày <?php echo $news[$i]->date; ?></dd>
                </dl>
                <p>
                    <img style="float: left; height: 105px; width: 140px;" src="<?php echo URL::to('/').'/images/news/'.$news[$i]->image; ?>" alt=""></img>
                </p>
                <p style="text-align: justify;">
                    <span style="font-size:12px;">
                        <span style="font-family:arial,helvetica,sans-serif;"><?php echo $news[$i]->content; ?></span>
                    </span>
                </p>
                <p class="readmore"><a href="<?php echo URL::to('/').'/tin-tuc/'.$news[$i]->id; ?>">Xem thêm</a></p>
            </div>
            <span class="row-separator"></span>
            <?php }?>
        </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
      $('#news').addClass('active');
</script>
@endsection