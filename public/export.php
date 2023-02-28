<?php
require_once '../connectdb.php';
$sql = "select *from dsdetais";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td>MSSV</td><td>Họ Tên</td><td>Tên đề tài</td><td>Điểm số</td><td>Học kỳ</td><td>Niên khóa</td></tr>';
while($row=mysqli_fetch_assoc($res)){
    $html.='<tr><td>'.$row['MSSV'].'</td><td>'.$row['HoTen'].'</td><td>'.$row['TenDeTai'].'</td><td>'.$row['DiemSo'].'</td><td>'.$row['HocKy'].'</td><td>'.$row['NienKhoa'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:appplication/xls');
header('Content-Disposition: attachment;filename=report.xls');

echo $html;