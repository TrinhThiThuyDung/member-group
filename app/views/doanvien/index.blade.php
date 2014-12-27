@extends('layout.layout-member')

@section('title')
Trang chủ 
@endsection

@section('content')
<?php $url = URL::to('/'); ?>
	<div id="page-content" style="max-width: 70%;">
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
                                        <?php $total_noti = count($noti); 
                                          for ($i=0; $i < $total_noti ; $i++) { 
                                          ?>
                						<li style="border-bottom: 1px solid #DDD;">
                							<h4 style="font-size: 1em; font-weight: bold;">
                								<a style="font-family: Arial,Helvetica,sans-serif;" class="mod-articles-category-title " href="<?php echo $url.'/thong-bao/'.$noti[$i]->id; ?>"><?php echo $noti[$i]->title; ?></a>
                							</h4>
                							<span class="mod-articles-category-date"><?php echo $noti[$i]->date; ?></span>
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
                					<div style="float: left; width: 100%">
                                        <div class="globalnews" style="margin: 2px;">
                                            <?php $url_image = $url."/images/news/"; 
                                            $total_news = count($news);
                                            for ($i=0; $i < $total_news ; $i++) { 
                                             ?>
                                            <div class="gn_static gn_static_1">
                                                <div class="gn_title">
                                                    <a href="<?php echo $url.'/tin-tuc/'.$news[$i]->id; ?>"><?php echo $news[$i]->title; ?></a>
                                                </div>
                                                <div class="gn_date"><?php echo $news[0]->date; ?></div>
                                                <div class="gn_introtext">
                                                    <p><img src="<?php echo $url_image.$news[$i]->image; ?>" style="float: left; height: 105px; width: 140px;"></p>
                                                    <p style="text-align: justify;">
                                                        <span style="font-size:12px;">
                                                            <span style="font-family:arial,helvetica,sans-serif;">
                                                                <?php echo $news[$i]->content; ?>
                                                            </span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="gn_readmore">
                                                    <a href="<?php echo $url.'/tin-tuc/'.$news[$i]->id; ?>">Chi tiết...</a>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>

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