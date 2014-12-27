@extends('layout.layout-manage')

@section('title')
Đăng tin
@endsection

@section('content')
<div class="content">
			<div id="page-content">
				<h2 id="page-title" style="margin-bottom:30px;">Post News</h2>
				<table >
					<tr>
						<th style="text-align:right;">Title</th>
						<td style="text-align:left"><input type="text" name="tieu_de" class="input_txt w_400"/></td>
					</tr>
					<tr>
						<th style="text-align:right;">Kind</th>
						<td width="400">
							<select class="input_txt">
								<option>For Members</option>
								<option>News</option>
								<option>Notification</option>
							</select>
						</td>
					</tr>
					<tr>
						<th style="text-align:right;">Content</th>
						<td><textarea name="noi_dung" class="textarea-xxlarge" placeholder="Write text here"></textarea></td>
					</tr>
				</table>
				<br />
				<div>
					<button type="submit" class="btn btn-primary">Post</button>
				</div>
			</div>
		</div>
@endsection

@section('script')
<script type="text/javascript">
$('#news').addClass('active');
$('#post').addClass('active');
</script>
@endsection