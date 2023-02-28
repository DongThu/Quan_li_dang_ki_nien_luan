<?php
include "../connectdb.php";
if(isset($_GET['giatri']) && isset($_GET['nam'])){
    $giatri = $_GET['giatri'];
    $nam = $_GET['nam'];
    $query ="SELECT * FROM lopphutrach where HocKy like '%$giatri%' ";
    if($nam != ''){
        $query ="SELECT * FROM lopphutrach where HocKy like '%$giatri%' and NienKhoa like '%$nam%'";
    }
    else{
        $query ="SELECT * FROM lopphutrach where HocKy like '%$giatri%' ";
    }
    $run = mysqli_query($conn, $query);
    $kq = '';
    $i=0;
            while($rows = mysqli_fetch_assoc($run)){
                $i++;
                $kq.="
                <tr>
                <td>".$i."</td>
                <td>".$rows['MaHP']."</td>
                <td>".$rows['TenHP']."</td>
                <td>".$rows['KyHieu']."</td>
                <td>".$rows['HocKy']."</td>
                <td>".$rows['NienKhoa']."</td>
                <td>
					<a href='index.php'>
					 ".$rows['danhsach']." </a>
                </td>
                <tr>";       
            }
            echo $kq;
        }
?>