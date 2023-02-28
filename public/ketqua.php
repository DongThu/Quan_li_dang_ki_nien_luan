<?php
include "../bootstrap.php";
use CT271\Labs\ketqua_cn; 

$kq = new ketqua_cn($PDO); 
$ketquas = $kq->all();

$conn = mysqli_connect('localhost','root','','ct271-nlcs');
if(isset($_POST['submit'])){
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;
    $query = "INSERT INTO fileup (filename) VALUES ('$fileName')";
    $run = mysqli_query($conn,$query);
    if($run){
        move_uploaded_file($fileTmpName,$path);
        echo '<script>alert("Đã thêm 1 file thành công!")</script>';
    }
    else{
        echo"error".mysql_error($conn);
    }
    }



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
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
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
                <div class="div_nav" >
                    <nav>
                        <ul class="nav nav-pills" role="tablist">
                            <li><a  href="info_sv.php">Thông tin sinh viên</a></li>
                            <li><a  href="quidinh_sv.php">Quy định đăng ký</a></li>
                            <li><a  href="quanlidetai.php">Quản lý đề tài</a></li>
                            <li><a style="background-color: #a8d5dd;" href="ketqua.php">Kết quả học tập</a></li>
                        </ul>
                    </nav>
                </div>
            <div class="div_container">
                <main>
                <!-- <a href="">nộp bài tai đây</a> -->
                 
              
                <table id="ketquas" 
						style=" background-color: rgb(224, 243, 248);
								text-align: center;">
						<thead>
							<tr>
        
								<th  style="text-align: center;">Nhận Xét</th>
								<th  style="text-align: center;">Điểm số</th>
								<th  style="text-align: center;">Nộp bài</th>
							</tr>
						
						</thead>
						<tbody>

                        <?php foreach($ketquas as $kq): ?>
							<tr>
								<td><?=htmlspecialchars($kq->NhanXet)?></td>
								<td><?=htmlspecialchars($kq->DiemSo)?></td> 
								<td style="width: 100px">
                                <form action="ketqua.php" method='post' enctype="multipart/form-data">
                                    <input style=" position: relative;
                                                    left: 10px;
                                                    top: 15px;" 
                                                    type="file" name='file'>
                                    <button class="btn btn-primary" style=" position: relative;
                                                    left: 120px;
                                                    top: -16px;"  
                                                    type="submit" name='submit'>Upload</button>
                                    
                                </form>
                                </td>
							</tr> 
                            <?php endforeach ?>
							</tbody>
					</table>
				</div>
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
                $('#').DataTable();
            });
        </script>
    </body>			
    
    
</html>