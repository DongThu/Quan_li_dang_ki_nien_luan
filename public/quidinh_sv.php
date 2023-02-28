<?php
include "../bootstrap.php";
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
        <link rel="stylesheet" href="../css/info.css">
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
                            <li><a href="info_sv.php">Thông tin sinh viên</a></li>
                            <li><a style="background-color: #a8d5dd;" href="quidinh.php">Quy định đăng ký</a></li>
                            <li><a  href="quanlidetai.php">Quản lý đề tài</a></li>
                            <li><a  href="ketqua.php">Kết quả học tập</a></li>
                        </ul>
                    </nav>
                </div>
            <div class="div_container">
                <main>

                <div class="groupbox">
                    <p class="ttsv">CÁC QUY ĐỊNH ĐĂNG KÝ NIÊN LUẬN</p>
                    <table>
                            <tr>
                                <th >Điều kiện đăng ký:</th>
                                 <td>Kiểm tra điều kiên tiên quyết</td>
                            </tr>
                            <tr>
                                <th>Thời gian đăng ký:</th>
                                <td>Từ 10/8/2022 - 31/8/2022</td>
                            </tr >
                                <td colspan="2">Nếu quá hạn thời gian đăng ký mà sinh viên chưa đăng ký đề tài thì đề tài sẽ do giáo viên hướng dẫn chỉ định.</td>
                            </tr>
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
                $('#tt_sv').DataTable();
            });
        </script>
    </body>			
    
    
</html>