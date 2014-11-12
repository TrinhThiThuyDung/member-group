@extends('layout.layout-member')
@section('title')
Thông báo | Cổng thông tin Đoàn Viên Thanh niên
@endsection

@section('content')
<div id="page-content">
		<h2 id="page-title">Thông báo</h2>
		<div class = "home-table">
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

@endsection

@section('script')
<script type="text/javascript">
      $('#noti').addClass('active');
</script>
@endsection