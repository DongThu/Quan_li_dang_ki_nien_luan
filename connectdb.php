<?php
// function connectdb(){
//   $servername = "localhost";
//   $username = "root";
//   $password = "";

//   try {
//     $conn = new PDO("mysql:host=$servername;dbname=ct271-nlcs", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Connected successfully";
//   } catch(PDOException $e) {
//     // echo "Connection failed: " . $e->getMessage();
//     return $conn;
//   }
// }
$server = "localhost";
  $user = "root";
  $pass = "";
  $database = 'ct271-nlcs';

  $conn = new mysqLi($server,$user, $pass, $database);
  if($conn){
    mysqLi_query($conn,"SET NAMES 'utf8'");
    // echo 'Đã kết nối thành công';
  }
  else{
    echo 'Kết nối thất bại';
  }
?>