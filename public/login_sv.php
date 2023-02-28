<?php
	include "../connectdb.php";
	session_start();
	if(isset($_SESSION['mySession']) ){
		header('location:info_sv.php');
	}

	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT *FROM tbl_sv WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==1){
			$_SESSION['mySession'] = $username;
			header("location: info_sv.php");
			$_SESSION['user_name'] = $username;
		}
		else{
		 echo '<script>alert("Tài khoản hoặc mật khẩu sai")</script>';
			
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký đề tài niên luận</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container border">
        <div class="div_container" style=" height: 530px">
            <header>
                <img class="logo" src="../img/1024px-Logo_Dai_hoc_Can_Tho.svg.png" alt="">
                <h4>HỆ THỐNG QUẢN LÝ NIÊN LUẬN BỘ MÔN CÔNG NGHỆ THÔNG TIN</h4>
            </header>
            <main>
               
             <br>                
            <div class="groupbox" style="
										position: relative;
										text-align: center;
										padding: 3%;
										padding-left: 7%;
										margin-left: 0px;
										color: aliceblue;
										align-items: center;
										left: 30%;
										border: 2px solid  rgb(109, 155, 225);
										border-radius: 5px;
										width: 40%;
										height: auto;
										background-color: white;
																			">
                <div class="div_h5">
                 <h5>ĐĂNG NHẬP</h5>
               </div>

				<form action="login_sv.php" method="post">
				<img src="../img/user1.png"  style="height: 38px;left: 35px;position: absolute; top: 50px;"alt="">
				<input type="text" name="username" id="" class="form-control mt-3" placeholder="Mã số đăng nhập">

				<img src="../img/pwd.png"  style="height: 30px;left: 35px;position: absolute; top: 110px;"alt="">
				<input  type="password" name="password" id="" class="form-control mt-3" placeholder="Mật khẩu">
				<br>
				<!-- <input style=" background-color: rgb(26, 92, 192); color: white; outline: none;" type="submit" name="submit" value="ĐĂNG NHẬP"> -->
				<button type="submit" name="submit">Đăng Nhập</button>
				</form> 
			</div>
	</main>
 
   
	
</div>
<footer>
		<p> Trường Đại học Cần Thơ (Can Tho University)
			<br>Khu II, đường 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ.
			<br>Điện thoại: (84-292) 3832663 - (84-292) 3838474; Fax: (84-292) 3838474; Email: dhct@ctu.edu.vn.
		</p>
	</footer>
</div>

</body>
</html>
