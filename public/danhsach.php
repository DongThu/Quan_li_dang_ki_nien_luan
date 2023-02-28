<?php
include "../bootstrap.php";
use CT271\Labs\DSach; 
use CT271\Labs\Dsdetai; 

$ds = new DSach($PDO); 
$detais = $ds->all();

$dsdetai = new Dsdetai($PDO); 
$dsdetais = $dsdetai->all();

session_start();
if(!isset($_SESSION['mySession'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Đăng ký đề tài niên luận</title>
    <link rel="stylesheet" href="../css/index.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="//cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?= BASE_URL_PATH . "css/sticky-footer.css" ?>" rel=" stylesheet">
	<link href="<?= BASE_URL_PATH . "css/font-awesome.min.css" ?>" rel=" stylesheet">
	<link href="<?= BASE_URL_PATH . "css/animate.css" ?>" rel=" stylesheet">

</head>
<body style=" background-color: rgb(216, 235, 237);">
	<div class="container border">
		
			<header>
			<a
				 style="  position: relative;
    						float: right;
							top:60px;
							right:4px;" 
							href="logout_gv.php">
					<button style="border-radius: 3px;" type="submit" name="dangxuat">Đăng xuất</button>
				</a>
                <img class="logo" src="../img/1024px-Logo_Dai_hoc_Can_Tho.svg.png" alt="">
                <h4 style="color: white; font-size: 23px;">HỆ THỐNG QUẢN LÝ NIÊN LUẬN BỘ MÔN CÔNG NGHỆ THÔNG TIN</h4>
            </header>
			<div style="position: relative;
                                top:-20px;
                                float: right;
                                right:6px;
                                color: white;">
                        <?php
                            echo "".$_SESSION['user_name'];
                        ?>
                    
                    </div>
            <div style="background-color: rgb(235, 245, 253);">
                    <nav>
                        <ul class="nav nav-pills" role="tablist">
                       		 <li><a href="info_gv.php">Thông tin giảng viên</a></li>
                            <!-- <li><a  href="quidinh_gv.php">Quy định đăng ký</a></li> -->
                            <li><a style="background-color: #a8d5dd;"  href="quanlidetai_gv.php">Quản lý đề tài</a></li>
                            <li><a  href="quanlidiem.php">Quản lý điểm</a></li>
                        </ul>
                    </nav>
                </div>
			<div class="div_container" style="background-color:white; border-radius: 0 0 5px 5px;" >
				<main>
					<br>
				<a style="position: relative; float: right; right: 60px;" href="<?= BASE_URL_PATH . 'add.php' ?>" class="btn btn-primary">
						<i class="fa fa-plus"></i>Thêm sinh viên</a>
					<table>
						<?php foreach($detais as $ds): ?>
						<th style="text-align: center;" ><?=htmlspecialchars($ds->Loai)?></th>
						
						<tr>
							<td>
								<p><b>Học kì:</b>
									<?=htmlspecialchars($ds->HocKy)?>
								- <b>Niên Khóa:</b>
									<?=htmlspecialchars($ds->NienKhoa)?>
								</p>
							</td>
						</tr>
					</table>
					<br>
					<table>
						<thead>
							<tr>
								<th  style="text-align: center; height: 30px;">MSSV</th>
								<th  style="text-align: center;">Họ tên </th>
								<th  style="text-align: center;">Tên đề tài</th>
								<th  style="text-align: center;">Nội dung</th>
								<th  style="text-align: center;">Ghi chú</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>							
							<tr>
                                <td  style="height: 30px;"><?=htmlspecialchars($ds->MSSV)?></td>
                                <td  style="height: 30px;"><?=htmlspecialchars($ds->HoTen)?></td>
								<td  style="height: 30px;"><?=htmlspecialchars($ds->TenDeTai)?></td>
								<td  style="height: 30px;"><?=htmlspecialchars($ds->NoiDung)?></td>
								<td  style="height: 30px;"><?=htmlspecialchars($ds->GhiChu)?></td> 								
								<td  style="height: 30px;">
								<a href="<?=BASE_URL_PATH . 'edit_gv.php?STT=' . $ds->getId()?>" 
											class="btn btn-xs btn-warning"> 
											<i alt="Edit" class="fa fa-pencil"></i></a> 
								<!-- </td>
								<td> -->
									<a href="<?=BASE_URL_PATH . 'edit_chuthich.php?STT=' . $ds->getId()?>"  class="btn btn-xs btn-primary">
									<i class="fa fa-pencil"></i></a>
											<form class="delete" action="<?=BASE_URL_PATH . 'delete.php'?>" 
											method="POST" style="display: inline;"> 
											<input type="hidden" name="id" 
												value="<?=$dsdetai->getId()?>"> 
											<button type="submit" class="btn btn-xs btn-danger" 
											name="delete-dsdetai"> 
											<i alt="Delete" class="fa fa-trash"> </i></button> 
										</form>
								
								</td>
								
							</tr> 
							<?php endforeach ?>
							<?php foreach($dsdetais as $dsdetai): ?>
							<tr>
							<td  style="height: 30px;"><?=htmlspecialchars($dsdetai->MSSV)?></td>
                            <td  style="height: 30px;"><?=htmlspecialchars($dsdetai->HoTen)?></td>
							<td  style="height: 30px;"><?=htmlspecialchars($dsdetai->TenDeTai)?></td>
							<td  style="height: 30px;"><?=htmlspecialchars($dsdetai->NoiDung)?></td>
							<td  style="height: 30px;"><?=htmlspecialchars($dsdetai->GhiChu)?></td> 
							<td  style="height: 30px;">
								<a href="<?=BASE_URL_PATH . 'edit_ds.php?id=' . $dsdetai->getId()?>" 
											class="btn btn-xs btn-warning"> 
											<i alt="Edit" class="fa fa-pencil"></i></a> 
								<!-- </td>
								<td> -->
								<a href="<?=BASE_URL_PATH . 'edit_chuthichds.php?id=' . $dsdetai->getId()?>"  class="btn btn-xs btn-primary">
								<i class="fa fa-pencil"></i></a>
										<form class="delete" action="<?=BASE_URL_PATH . 'delete.php'?>" 
											method="POST" style="display: inline;"> 
											<input type="hidden" name="id" 
												value="<?=$dsdetai->getId()?>"> 
											<button type="submit" class="btn btn-xs btn-danger" 
											name="delete-dsdetai"> 
											<i alt="Delete" class="fa fa-trash"></i></button> 
										</form>
								</td> 
							</td>
							
							</tr> <?php endforeach ?>

							</tbody>
							<div id="delete-confirm" class="modal fade" role="dialog">"
							<div class="modal-dialog"> 
								<div class="modal-content"> 
									<div class="modal-header"> 
										<button type="button" class="close" 
										data-dismiss="modal">&times;</button> 
										<h4 class="modal-title">Confirmation</h4>
									 </div> 
									 <div class="modal-body">Bạn có chắc muốn xóa sinh viên này?</div> 
									 <div class="modal-footer"> 
										<button type="button" data-dismiss="modal" 
										class="btn btn-danger" id="delete">Delete</button> 
										<button type="button" data-dismiss="modal" 
										class="btn btn-default">Cancel</button> 
									</div> 
								</div> 
							</div>
					</table>
					
				</main>
			</div>
			<br>
			<footer>
					<p> Trường Đại học Cần Thơ (Can Tho University)
						<br>Khu II, đường 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ.
						<br>Điện thoại: (84-292) 3832663 - (84-292) 3838474; Fax: (84-292) 3838474; Email: dhct@ctu.edu.vn.
					</p>
			</footer>
		
	</div>
	

	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= BASE_URL_PATH . "js/wow.min.js" ?>"></script>
	<script>
		$(document).ready(function() {
			new WOW().init();
			$('#dsdetais').DataTable();

			$('button[name="delete-dsdetai"]').on('click', function(e){ 
				e.preventDefault(); 
				
				const form = $(this).closest('form'); 
				const nameTd = $(this).closest('tr').find('td:first'); 
				if (nameTd.length > 0) { 
					$('.modal-body').html( 
						`Do you want to delete "${nameTd.text()}"?` 
					); 
				}
				$('#delete-confirm').modal({ 
					backdrop: 'static', keyboard: false 
				})
				.one('click', '#delete', function() { 
					form.trigger('submit'); 
				}); 
			}); 
		});
	</script></body>			


</html>