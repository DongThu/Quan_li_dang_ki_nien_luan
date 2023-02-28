<?php 
require_once '../bootstrap.php'; 

use CT271\Labs\Dsdetai; 

$dsdetai = new Dsdetai($PDO); 
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' 
    && isset($_POST['id']) 
    && ($dsdetai->find($_POST['id'])) !== null 
    ) { 
        $dsdetai->delete(); 
    }
    redirect('danhsach.php');