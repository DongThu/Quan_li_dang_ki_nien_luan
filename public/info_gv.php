<?php
include "../bootstrap.php";
use CT271\Labs\Info_gv_cn; 

$ttgv = new Info_gv_cn($PDO); 
$tt_gv = $ttgv->all();

session_start();
if(!isset($_SESSION['mySession'])){
	header('location:login_gv.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Đăng ký đề tài niên luận</title>
        <link rel="stylesheet" href="../css/info.css">
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
					<button style="background-color:  rgb(217, 231, 252);
                             border-radius: 3px;"  
                             type="submit" name="dangxuat">Đăng xuất</button>
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
                            <li><a style="background-color: #a8d5dd;"  href="info_gv.php">Thông tin giảng viên</a></li>
                            <!-- <li><a  href="quidinh_gv.php">Quy định đăng ký</a></li> -->
                            <li><a  href="quanlidetai_gv.php">Quản lý đề tài</a></li>
                            <li><a  href="quanlidiem.php">Quản lý điểm</a></li>
                        </ul>
                    </nav>
                </div>
            <div class="div_container" >
                <main>

                    <div class="groupbox" style="height: 400px; width:700px; margin-left: 150px;">
                        <p class="ttsv">THÔNG TIN GIẢNG VIÊN</p>
                            <table id="infos" style="width: 600px">
                                <?php foreach($tt_gv as $ttgv): ?>
                
                                <thead>
                                
                                    <tr>
                                        <th >MSCB</th>
                                        <td><?=htmlspecialchars($ttgv->MSCB)?></td>  
                                        
                                    </tr>
                                
                                    <tr>
                                        <th >Họ Tên</th>
                                        <td><?=htmlspecialchars($ttgv->HoTenCB)?></td> 

                                    </tr>
                                    <tr>
                                        <th>Email</th>

                                        <td><?=htmlspecialchars($ttgv->Email)?></td> 
                                    </tr>
                                    <tr>
                                        <th>SĐT</th>

                                        <td><?=htmlspecialchars($ttgv->sdt)?></td> 
                                    </tr>

                                    <tr>
                                        <th>Ngày Sinh</th>
                                        <td><?=htmlspecialchars($ttgv->NgaySinhCB)?></td>
                                        

                                    </tr>

                                    <tr>
                                        <th>Giới Tính</th>
                                        <td><?=htmlspecialchars($ttgv->GioiTinhCB)?></td> 
                                    
                                    </tr>

                                    <tr>
                                        <th>Trình độ chuyên môn</th>
                                        <td><?=htmlspecialchars($ttgv->BoMon)?></td> 

                                    </tr>

                                    <tr>
                                        <th>Đơn vị công tác</th>
                                        <td><?=htmlspecialchars($ttgv->ChuyenNganh)?></td> 

                                    </tr>	
                                    
                                    <tr>
                                        <th>Năm Giảng Dạy</th>
                                        <td><?=htmlspecialchars($ttgv->NamGiangDay)?></td> 

                                    </tr>

                                    <tr>
                                        <th>Khoa</th>

                                        <td><?=htmlspecialchars($ttgv->Khoa)?></td> 
                                    </tr>
                                
                                </thead>

                                <?php endforeach ?>
                            
                                    
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
                $('#tt_gv').DataTable();
            });
        </script>
    </body>			
    
    
</html>