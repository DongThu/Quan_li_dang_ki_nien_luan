<?php
include "../bootstrap.php";
use CT271\Labs\Detai; 

$detai = new Detai($PDO); 
$detais = $detai->all();

session_start();
if(!isset($_SESSION['mySession'])){
	header('location:login_sv.php');
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
							right:4px;
							" 
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
                            <li> <a href="info_sv.php">Thông tin sinh viên</a></li>
                            <li> <a  href="quidinh_sv.php">Quy định đăng ký</a></li>
                            
                            <li><a style="background-color: #a8d5dd;" href="index.php">Quản lý đề tài</a></li>
                            <li><a href="ketqua.php">Kết quả học tập</a></li>
                        </ul>
                    </nav>
                </div>
			<div class="div_container" style="background-color:white; border-radius: 0 0 5px 5px;" >
				<main>
					<table>
						<th style="text-align: center;" >Đăng ký đề tài niên luận</th>
						<?php foreach($detais as $detai): ?>
						<tr>
							<td>
								<p><b>Học kì:</b>
									<?=htmlspecialchars($detai->HocKy)?>

								- <b>Niên Khóa:</b>
									<?=htmlspecialchars($detai->NienKhoa)?>
								</p>

							</td>
						</tr>
						
					</table>

					<br>
					<table id="detais" 
						style=" background-color: rgb(224, 243, 248);
								text-align: center;">
						<thead>
							<tr>
								<th  style="text-align: center;">Loại niên luận</th>
								<th  style="text-align: center;">Tên đề tài</th>
								<th  style="text-align: center;">Nội dung</th>
								<th  style="text-align: center;">Cán bộ hướng dẫn</th>
								<th  style="text-align: center;">Ghi chú</th>
								<th  style="text-align: center;">Đăng ký</th>
							</tr>
						
						</thead>
						<tbody>

							
							<tr>
								
								<td><?=htmlspecialchars($detai->Loai)?></td>
								<td><?=htmlspecialchars($detai->TenDeTai)?></td>
								<td><?=htmlspecialchars($detai->NoiDung)?></td>
								<td><?=htmlspecialchars($detai->HoTenCB)?></td> 
								<td><?=htmlspecialchars($detai->GhiChu)?></td> 

								<td>
								<a href="<?=BASE_URL_PATH . 'edit_sv.php?STT=' . $detai->getId()?>" 
											class="btn btn-xs btn-warning"> 
											<i alt="Edit" class="fa fa-pencil">Đăng ký</i></a> 
								</td>
							</tr> <?php endforeach ?>
							</tbody>
					</table>
					
					<p style="position: relative;
                                top:80px;
                                left:80px;
                                color: red;"
					>*Chú ý: <?=htmlspecialchars($detai->NXDT)?></p>
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
			// $('#detais').DataTable();
		});
	</script>
</body>			


</html>