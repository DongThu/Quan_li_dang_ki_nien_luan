<?php
include "../bootstrap.php";
require_once '../bootstrap.php'; 
use CT271\Labs\Info_sv_cn; 

$info = new Info_sv_cn($PDO); 
$tt_sv = $info->all();

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
                            <li><a style="background-color: #a8d5dd;"  href="info_sv.php">Thông tin sinh viên</a></li>
                            <li><a  href="quidinh_sv.php">Quy định đăng ký</a></li>
                            <li><a  href="quanlidetai.php">Quản lý đề tài</a></li>
                            <li><a  href="ketqua.php">Kết quả học tập</a></li>
                        </ul>
                    </nav>
                </div>
            <div class="div_container">
                <main>

                <div class="groupbox" style="height: 420px; margin-left: 0px;">
                    <p class="ttsv">THÔNG TIN SINH VIÊN</p>
                    <table id="infos" style="">
                        <?php foreach($tt_sv as $info): ?>
        
                        <thead>
                           
                            <tr>
                                <th >MSSV</th>
                                <td><?=htmlspecialchars($info->MSSV)?></td>  
                                 
                            </tr>
                           
                            <tr>
                                <th >Họ Tên</th>
                                <td><?=htmlspecialchars($info->HoTen)?></td> 

                            </tr>

                            <tr>
                                <th >Email</th>
                                <td><?=htmlspecialchars($info->Email)?></td> 

                            </tr>

                            <tr>
                                <th >SĐT</th>
                                <td><?=htmlspecialchars($info->sdt)?></td> 

                            </tr>

                            <tr>
                                <th>Ngày Sinh</th>
                                <td><?=htmlspecialchars($info->NgaySinh)?></td>
                                 

                            </tr>

                            <tr>
                                <th>Giới Tính</th>
                                <td><?=htmlspecialchars($info->GioiTinh)?></td> 
                               
                            </tr>

                            <tr>
                                <th>Lớp</th>
                                <td><?=htmlspecialchars($info->Lop)?></td> 

                            </tr>

                            <tr>
                                <th>Ngành Học</th>
                                <td><?=htmlspecialchars($info->NganhHoc)?></td> 

                            </tr>	
                            
                            <tr>
                                <th>Khóa học</th>
                                <td><?=htmlspecialchars($info->KhoaHoc)?></td> 

                            </tr>

                            <tr>
                                <th>Khoa</th>

                                <td><?=htmlspecialchars($info->Khoa)?></td> 
                            </tr>
                        
                        </thead>

                        <?php endforeach ?>
                       
                                
                                 
                        </table>
				</div>

                <div class="groupbox" style="height: 200px; margin-left: 600px; width: 400px; top: -370px ">
                    <p class="ttsv">CỐ VẤN HỌC TẬP</p>
                        <table>
                            <tr>
                                <th >MSCB</th>
                                <td>004321</td>  
                                 
                            </tr>
                           
                            <tr>
                                <th >Họ và Tên</th>
                                <td>Trần Minh Tân</td> 

                            </tr>

                            <tr>
                                <th >Email</th>
                                <td>tmtan@ctu.edu.vn</td> 

                            </tr>

                            <tr>
                                <th >SĐT</th>
                                <td>0982889090</td> 
                        </table>
                </div>

                <div class="groupbox" style="height: 200px; margin-left: 600px; width: 400px; top: -350px ">
                    <p class="ttsv">THÔNG TIN GIA ĐÌNH</p>
                        <table>
                            <tr>
                                <th>Ông/Bà</th>
                                <td>Đồng Chí Linh</td>  
                                 
                            </tr>
                           
                            <tr>
                                <th >Ông/Bà</th>
                                <td>Trần Thị Mỹ Á</td> 

                            </tr>
                            <tr>
                                <th >SĐT</th>
                                <td>0919728618</td> 
                            </tr>

                            <tr>
                                <th >Địa chỉ</th>
                                <td>Vĩnh Hòa, Vĩnh Lộc,</td>
                                
                            </tr>
                            <tr>
                                <th></th>
                                <td>Hồng Dân, Bạc Liêu</td> 
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