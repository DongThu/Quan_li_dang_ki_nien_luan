<?php
include "../bootstrap.php";
include "../src/DSach.php";

use CT271\Labs\DSach;

$detai = new DSach($PDO); 

$STT = isset($_REQUEST['STT']) ? 
	filter_var($_REQUEST['STT'], FILTER_SANITIZE_NUMBER_INT) : -1; 

if ($STT < 0 || !($detai->find($STT))) { 
	redirect(BASE_URL_PATH); 
}

$errors = []; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
	if ($detai->update($_POST)) { 
		// Cập nhật dữ liệu thành công 
		redirect("danhsach.php"); 
	}
	// Cập nhật dữ liệu không thành công 
	$errors = $detai->getValidationErrors(); 

	// session_start();
	if(!isset($_SESSION['mySession'])){
	header('location:login_gv.php');
}
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
		<div class="div_container"  style="height: 700px;">
			<header>
			<a
				 style="  position: relative;
    						background-color: white;
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
							session_start();
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
			<!-- <main> -->
                <br>
                <br>
			<form name="frm" id="frm" action="" method="post" class="col-md-6 col-md-offset-3">
							
							<!-- Ghi chú -->
							<div class="form-group<?= isset($errors['NXDT']) ? ' has-error' : '' ?>">
								<label for="NXDT">Nhận xét đề tài </label>
								<textarea name="NXDT" id="NXDT" class="form-control" placeholder="Enter notes (maximum character limit: 255)"><?= htmlspecialchars($detai->NXDT) ?></textarea>

								<?php if (isset($errors['NXDT'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['NXDT']) ?></strong>
									</span>
								<?php endif ?>
							</div>
							
							<!-- Submit -->
							<button type="submit" name="submit" id="submit" class="btn btn-primary">Cập nhật</button>
						</form>

			<!-- </main> -->

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
	<script src="<?= BASE_URL_PATH . "js/wow.min.js" ?>"></script>
	<script>
		$(document).ready(function() {
			new WOW().init();
		});
	</script>
</body>

</html>