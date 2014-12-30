@extends('layout.layout-manage')

@section('title')
Đăng tin
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title" style="margin-bottom:30px;">Đăng tin</h2>
				<table >
					<form method="post" action="<?php echo URL::to('/').'/admin/dang-tin-moi/' ?>">
					<tr>
						<th style="text-align:right;">Tiêu đề tin</th>
						<td style="text-align:left"><input type="text" name="title" class="input_txt w_400"/></td>
					</tr>
					<tr>
						<th style="text-align:right;">Loại tin</th>
						<td width="400">
							<select class="input_txt" name="kind">
								
								<option value = "2">Tin tức</option>
								<option value = "1">Thông báo</option>
							</select>
						</td>
					</tr>
					<tr>
						<th style="text-align:right;">Nội dung</th>
						<td><textarea name="content" class="textarea-xxlarge" placeholder="Write text here"></textarea></td>
					</tr>
				</table>
				<br />
				<div>
					<button type="submit" class="btn btn-primary">Đăng tin mới</button>
				</div>
				</form>
			</div>
		</div>
@endsection

@section('script')
<script type="text/javascript">
$('#news').addClass('active');
$('#post').addClass('active');
</script>
@endsection