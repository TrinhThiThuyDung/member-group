@extends('layout.layout-manage')

@section('title')
Chỉnh sửa tin tức
@endsection

@section('content')
<div id="page-content" style="min-height: 500px;">
		<h2 id="page-title">CHỈNH SỬA TIN</h2>

        <dl class="article-info" >
        <dd class="published"> Được đăng ngày thứ <?php echo $news->date; ?></dd>
        </dl>
        <form method="post" action="<?php echo URL::to('/').'/admin/cap-nhap/'.$id_loai.'/'.$news->id; ?>"> 
        <label>Chỉnh sửa tiêu đề</label>
        <textarea id="title" rows="4" cols="50" name="title"><?php echo $news->title; ?></textarea>
        
    </br>
</br>
       <label>Chỉnh sửa nội dung</label>
       <textarea id="content" rows="10" cols="50" height="100px;" name="content"><?php echo $news->content; ?></textarea>
        <?php if($news->image!=null){?>
        <p style="text-align: center;" ><img  src="<?php echo URL::to('/').'/images/news/'.$news->image; ?>"></p>
	<?php }?>
	<div class="tabs-button" align="left"> 
                                                 
        <div class="button-content" align="left">
            <button class="btn btn-primary" id="ok" type="submit">Hoàn tất</button>
        </div>
             </form>                                   
        
    </div>	
	</div>

@endsection
