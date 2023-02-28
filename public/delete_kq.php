<?php 
require_once '../bootstrap.php'; 

use CT271\Labs\dsketqua; 

$dskq = new dsketqua($PDO); 
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' 
    && isset($_POST['id']) 
    && ($dskq->find($_POST['id'])) !== null 
    ) { 
        $dskq->delete(); 
    }
    redirect(BASE_URL_PATH);
    