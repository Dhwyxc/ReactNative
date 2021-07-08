<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
include_once 'classes/database.php';
include_once 'classes/session.php';
$db = new database();
$ss = new session();
$ss->StartSession();
$httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
$base = $httpProtocol.'://'.$_SERVER['HTTP_HOST']."/".'FlowerShop/';

$vs = $db->getRow("SELECT AVG(vote_prd) AS star , count(id_cmt) as tt 
                    FROM comments where id_prd=".$_GET['id_prd']." AND id_prcmt=0");

 header('Content-Type: application/json');
 echo json_encode($vs);
    
 ?>