@extends('layout.layout-manage')
@section('title')
Quản lý tin tức
@endsection

@section('content')
	<div id="page-content">
		<h2 id="page-title">Trang chủ</h2>
		<div class = "home-table">
			<h3 style="font-family:  Arial,Helvetica,sans-serif;">
				<span class="home-span">
					<span class="home-span-2">
						<span class="home-span-title">
                             <span class="home-span-icon" style="background: url('{{Asset('/images/speaker.png')}}') no-repeat center;"></span>
						Danh sách thông báo
						</span>
					</span>
				</span>
			</h3>
			<div id="span-table-index" class="moduletabs top-position clearfix">
                <div class="tabs-content-wrap">
                	<div class="tabs-content">
                		<div class="tabs-content-inner">
                			<div class="tab-content selected" title="sj_module_2load:119">
                				<div class="moduletable">
                					<ul style="padding-left:10px;" class="category-module">
                                         <?php $total_noti = count($noti); 
                                          for ($i=0; $i < $total_noti ; $i++) { 
                                          ?>
                						<li>
                							<h4>
                								<a style=" font-size: 15px; font-family: Arial,Helvetica,sans-serif;" class="mod-articles-category-title " href=""><?php echo $noti[$i]->title; ?></a>
                							</h4>
                							<span class="mod-articles-category-date">Đăng ngày <?php echo $noti[$i]->date; ?></span>
                						    <div class="tabs-button" align="left"> 
                                                 <form method="get" action="<?php echo URL::to('/').'/admin/chinh-sua-tin-tuc/1/'.$noti[$i]->id; ?>"> 
                                                <div class="button-content" align="left">
                                                    <button class="btn btn-primary button" type="submit">Chỉnh sửa</button>
                                                </div>
                                                </form>
                                                <div class="button-content" align="left" style="position: absolute; left: 200px; margin-top:-33px;">
                                                    <button class="btn btn-primary button delete_noti" value="<?php echo $noti[$i]->id; ?>">Xóa</button>
                                                </div>
                                            </div>	
                						</li>
                                         <?php } ?>
                						
                					</ul>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
			</div>

		</div>
		<div class = "home-table">
			<h3 style="font-family:  Arial,Helvetica,sans-serif;">
				<span class="home-span">
					<span class="home-span-2">
						<span class="home-span-title">
                             <span class="home-span-icon" style="background: url('{{Asset('/images/rss.png')}}') no-repeat center;"></span>
						Danh sách tin túc
						</span>
					</span>
				</span>
			</h3>
			<div id="span-table-index" class="moduletabs top-position clearfix">
                <div class="tabs-content-wrap">
                	<div class="tabs-content">
                		<div class="tabs-content-inner">
                			<div class="tab-content selected" title="sj_module_2load:119">
                				<div class="moduletable">
                					<ul style="padding-left:10px;" class="category-module">
                                         <?php 
                                            $total_news = count($news);
                                            for ($i=0; $i < $total_news ; $i++) { 
                                             ?>
                						<li>
                							<h4>
                								<a style="font-size: 15px; font-family: Arial,Helvetica,sans-serif;" class="mod-articles-category-title " href=""><?php echo $news[$i]->title;?> </a>
                							</h4>
                							<span class="mod-articles-category-date">Đăng ngày <?php echo $news[$i]->date; ?></span>
                                            <div class="tabs-button" align="left">
                                            <form method="get" action="<?php echo URL::to('/').'/admin/chinh-sua-tin-tuc/2/'.$news[$i]->id; ?>">
                                                <div class="button-content" align="left">
                                                    <button class="btn btn-primary button" type="submit">Chỉnh sửa</button>
                                                </div>
                                            </form>
                                                <div class="button-content" align="left" style="position: absolute; left: 200px; margin-top:-33px;">
                                                    <button class="btn btn-primary button  delete_news" value="<?php echo $news[$i]->id; ?>">Xóa</button>
                                                </div>
                                            </div>  
                						</li>
                						 <?php } ?>
                					</ul>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
			</div>
		</div>
	</div>

@endsection
@section('script')
<script type="text/javascript">
      $('#home').addClass('active');
      $(document).ready(function(){
        var hostname = location.protocol+'//'+location.hostname;
            
        if (location.href.match('8000')) {
             hostname = hostname +':8000/';
        }
        $('.delete_news').click(function(){
            var id_news = $(this).val();
            var news = $(this).parent().parent().parent();
            var link = hostname+'admin/xoa-tin-tuc/2/';
            var xacNhan = confirm("Bạn có thực sự muốn xóa tin này?");
            if(xacNhan==true){
                $.ajax({
                    type: 'get',
                    url: link+id_news,
                    dataType: 'json',
                    success:function(data){
                        if(data==0){
                            alert("Đã có lỗi xảy ra! Tin này chưa xóa được.");
                        }
                        else{
                            $(news).remove();
                            alert("Tin đã được xóa thành công.");
                        }
                    }
                })
            }
            
        });
        $('.delete_noti').click(function(){
            var noti = $(this).parent().parent().parent();
           var id_noti = $(this).val();
            var link = hostname+'admin/xoa-tin-tuc/1/';
             var xacNhan = confirm("Bạn có thực sự muốn xóa tin này?");
             if(xacNhan==true){
                $.ajax({
                    type: 'get',
                    url: link+id_noti,
                    dataType: 'json',
                    success:function(data){
                        if(data==0){
                            alert("Đã có lỗi xảy ra! Tin này chưa xóa được.");
                        }
                        else{
                             $(noti).remove();
                            alert("Thông báo đã được xóa thành công.");
                        }
                    }
                })
            }
        })
      })
</script>
@endsection