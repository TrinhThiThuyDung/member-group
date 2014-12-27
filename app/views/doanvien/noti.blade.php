@extends('layout.layout-member')
@section('title')
Thông báo | Cổng thông tin Đoàn Viên Thanh niên
@endsection

@section('content')
<div id="page-content">
		<h2 id="page-title">THÔNG BÁO</h2>
		<form id= "adminForm" name="adminForm" method="post" action="">

            <table class="category">
                <?php $total = count($noti);
                for ($i=0; $i < $total; $i++) { 
                    
                  ?>
                <tr >
                    <td class="list-title"><a href="<?php echo URL::to('/').'/thong-bao/'.$noti[$i]->id; ?>"> <?php echo $noti[$i]->title; ?></a></td>
                    <td class="list-date"><?php echo $noti[$i]->date; ?></td>
                </tr>
               <?php }?>
            </table>
        </form>
</div>
@endsection

@section('script')
<script type="text/javascript">
      $('#noti').addClass('active');
      $(document).ready(function(){
        $('tr:odd').addClass("cat-list-row1");
        $('tr:even').addClass("cat-list-row0");
      });
</script>
@endsection