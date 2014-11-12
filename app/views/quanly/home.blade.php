@extends('layout.layout-manage')
@section('title')
Trang chủ | Cổng thông tin Đoàn Viên Thanh niên
@endsection

@section('content')
<div class="content">
	<div id="page-content">
		<h2 id="page-title">Trang chủ</h2>
		<div class = "home-table">
			<h3 style="font-family:  Arial,Helvetica,sans-serif;">
				<span class="home-span">
					<span class="home-span-2">
						<span class="home-span-title">
                             <span class="home-span-icon" style="background: url('{{Asset('/images/speaker.png')}}') no-repeat center;"></span>
						THÔNG BÁO
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
                						<li>
                							<h4>
                								<a style="font-family: Arial,Helvetica,sans-serif;" class="mod-articles-category-title " href="">Thông Tin 1</a>
                							</h4>
                							<span class="mod-articles-category-date">08/11/2014</span>
                						    <div class="tabs-button" align="left"> 
                                                <div class="button-content" align="left">
                                                    <button class="btn btn-primary button">Chỉnh sửa</button>
                                                </div>
                                            
                                                <div class="button-content" align="left" style="position: absolute; left: 200px; margin-top:-33px;">
                                                    <button class="btn btn-primary button">Xóa</button>
                                                </div>
                                            </div>	
                						</li>

                						<li>
                							<h4>
                								<a style="font-family: Arial,Helvetica,sans-serif;" class="mod-articles-category-title" href="">Thông Tin 2</a>
                							</h4>
                							<span class="mod-articles-category-date">08/11/2014</span>
                						</li>
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
						TIN TỨC
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
                						<li>
                							<h4>
                								<a style="font-family: Arial,Helvetica,sans-serif;" class="mod-articles-category-title " href="">Tin tức 1</a>
                							</h4>
                							<span class="mod-articles-category-date">08/11/2014</span>
                						</li>
                						<li>
                							<h4>
                								<a style="font-family: Arial,Helvetica,sans-serif;" class="mod-articles-category-title" href="">Tin tức 2</a>
                							</h4>
                							<span class="mod-articles-category-date">08/11/2014</span>
                						</li>
                					</ul>
                				</div>
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
</script>
@endsection