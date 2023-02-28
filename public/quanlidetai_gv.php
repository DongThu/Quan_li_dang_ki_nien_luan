<?php
include "../bootstrap.php";
include "../connectdb.php";
use CT271\Labs\LOPPHUTRACH; 

$lpt = new LOPPHUTRACH($PDO); 
$lopphutrach = $lpt->all();

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		 $(document).ready(function(){ 
			$("#filter").on('input',function(e){
            var giatri = $(this).val();
			var nam = $("#nk").val();
				$.ajax({
					url: "fetch.php",
					type: "GET",
					data: {giatri:giatri,nam:nam},
					success:function(data){
						$("#lopphutrach").html(data);
					}
				})
        	})

			$("#nk").on('input',function(e){
				var nam = $(this).val();
				var giatri = $("#filter").val();
				$.ajax({
					url: "loc_nam.php",
					type: "GET",
					data: {giatri:giatri,nam:nam},
					success:function(data){
						$("#lopphutrach").html(data);
					}
				})
        	})
		})


	</script>

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
                            <li><a href="info_gv.php">Thông tin giảng viên</a></li>
                          <!-- <li><a  href="quidinh_gv.php">Quy định đăng ký</a></li>  -->
                            <li><a style="background-color: #a8d5dd;"  href="quanlidetai_gv.php">Quản lý đề tài</a></li>
                            <li><a  href="quanlidiem.php">Quản lý điểm</a></li>
                        </ul>
                    </nav>
                </div>
			<div class="div_container" style="background-color:white; border-radius: 0 0 5px 5px;" >
				<main>
		   			<table>
						<th style="text-align: center;" >Quản lý đề tài niên luận</th>
						<tr>
							<td>
							<b>Học Kỳ:</b>
							<select name="" id="filter">
							<option value="1">1</option>
							<option value="2">2</option>
							</select>
								- <b>Niên Khóa:</b>
								<select name="location" id="nk">
									<option value="2022-2023">2022-2023</option>
									<option value="2021-2022">2021-2022</option>
									<option value="2020-2021">2020-2021</option>
									<option value="2019-2020">2019-2020</option>
									<option value="">All</option>
									</select>
								</p>
							</td>
						</tr>
						
					</table>
					<br>
					<table
						style=" background-color: rgb(224, 243, 248);
								text-align: center;">
						<thead>
							<tr>
								<!-- <th  style="text-align: center;">MSSV</th> -->
								<!-- <th  style="text-align: center;">Họ tên </th> -->
								<th  style="text-align: center;">STT</th>
								<th  style="text-align: center;">Mã học phần</th>
								<th  style="text-align: center;">Tên học phần</th>
								<th  style="text-align: center;">Ký hiệu</th>
								<th  style="text-align: center;">Học Kỳ</th>
								<th  style="text-align: center;">Niên Khóa</th>
								<th  style="text-align: center;">Danh sách</th>
							</tr>
						</thead>
							<tbody id="lopphutrach">
                        <?php
                            $sql = "SELECT * FROM lopphutrach";
                            $result = mysqli_query($conn,$sql);
                            $i=0;
                            while($rows = mysqli_fetch_array($result)){
                                $i=$i+1;
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $rows['MaHP'] ?></td>
                                <td><?php echo $rows['TenHP'] ?></td>
                                <td><?php echo $rows['KyHieu'] ?></td>
                                <td><?php echo $rows['HocKy'] ?></td>
                                <td><?php echo $rows['NienKhoa'] ?></td>
                                <td>
									<a href="danhsach.php">
									<?php echo $rows['danhsach'] ?></a></td>
                                
                            </tr>
                        <?php       
                            }
                        ?>
                        </tbody>
							</tbody>
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

</body>			


</html>