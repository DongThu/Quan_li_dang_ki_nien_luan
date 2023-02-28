<?php
include "../bootstrap.php";
include "../src/Dsdetai.php";
use CT271\Labs\Dsdetai;
$errors = []; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
	$dsdetai = new Dsdetai($PDO); 
	$dsdetai->fill($_POST); 
	if ($dsdetai->validate()) { 
		$dsdetai->save() && redirect('danhsach.php'); 
	}
	$errors = $dsdetai->getValidationErrors(); 
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
    <link rel="stylesheet" href="./css/index.css">
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
    						float: right;
							top:60px;
							right:4px;" 
							href="logout_gv.php">
					<button style="border-radius: 3px;" type="submit" name="dangxuat">Đăng xuất</button>
				</a>
                <img class="logo" src="./img/1024px-Logo_Dai_hoc_Can_Tho.svg.png" alt="">
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
                            <li><a style="background-color: #a8d5dd;"   href="quanlidetai_gv.php">Quản lý đề tài</a></li>
                            <li><a href="quanlidiem.php">Quản lý điểm</a></li>
                        </ul>
                    </nav>
                </div>

						<form name="frm" id="frm" action="" method="post" class="col-md-6 col-md-offset-3">

							<!-- MSSV -->
							<div class="form-group<?= isset($errors['MSSV']) ? ' has-error' : '' ?>">
								<label for="MSSV">MSSV</label>
								<input type="text" name="MSSV" class="form-control" maxlen="255" id="MSSV" placeholder="Enter MSSV" value="<?= isset($_POST['MSSV']) ? htmlspecialchars($_POST['MSSV']) : '' ?>" />

								<?php if (isset($errors['MSSV'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['MSSV']) ?></strong>
									</span>
								<?php endif ?>
							</div>
							<!-- HoTen -->
							<div class="form-group<?= isset($errors['HoTen']) ? ' has-error' : '' ?>">
								<label for="HoTen">Họ Tên</label>
								<input type="text" name="HoTen" class="form-control" maxlen="255" id="HoTen" placeholder="Enter full name" value="<?= isset($_POST['HoTen']) ? htmlspecialchars($_POST['HoTen']) : '' ?>" />

								<?php if (isset($errors['HoTen'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['HoTen']) ?></strong>
									</span>
								<?php endif ?>
							</div>
							
							<!-- Tên đề tài -->
							<div class="form-group<?= isset($errors['TenDeTai']) ? ' has-error' : '' ?>">
								<label for="TenDeTai">Tên Đề Tài</label>
								<textarea name="TenDeTai" id="TenDeTai" class="form-control" placeholder="Enter name (maximum character limit: 255)"><?= isset($_POST['TenDeTai']) ? htmlspecialchars($_POST['TenDeTai']) : '' ?></textarea>

								<?php if (isset($errors['TenDeTai'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['TenDeTai']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- Nội dung -->
							<div class="form-group<?= isset($errors['NoiDung']) ? ' has-error' : '' ?>">
								<label for="NoiDung">Nội Dung</label>
								<textarea name="NoiDung" id="NoiDung" class="form-control" placeholder="Enter project name (maximum character limit: 255)"><?= isset($_POST['NoiDung']) ? htmlspecialchars($_POST['NoiDung']) : '' ?></textarea>

								<?php if (isset($errors['NoiDung'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['NoiDung']) ?></strong>
									</span>
								<?php endif ?>
							</div>
							<!-- Ghi chú -->
							<div class="form-group<?= isset($errors['GhiChu']) ? ' has-error' : '' ?>">
								<label for="GhiChu">Ghi Chú </label>
								<textarea name="GhiChu" id="GhiChu" class="form-control" placeholder="Enter notes (maximum character limit: 255)"><?= isset($_POST['GhiChu']) ? htmlspecialchars($_POST['GhiChu']) : '' ?></textarea>

								<?php if (isset($errors['GhiChu'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['GhiChu']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- Submit -->
							<button type="submit" name="submit" id="submit" class="btn btn-primary">Lưu</button>
						</form>

					
				

		</div>
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