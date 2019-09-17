<?php
header("Content-Type: text/html; charset=utf8");

$check = isset($_GET["check"]) ? $_GET["check"] : '';

if(empty($check)) {
    echo '请输入姓名！';
    exit;
}
//创建连接
try{  
    $user = 'root';
    $password = '001230';
    $pdo = new PDO('mysql:host=localhost; dbname=wuxie', $user, $password);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
$checkExistName="SELECT  `name` FROM `wuxieTable` WHERE `name` = '$check'";
$result=$pdo->query($checkExistName);
$tnaC=$result->fetchAll(PDO::FETCH_ASSOC);
if ($tnaC) {
    echo "您已报名！";
} else {
    echo "√";
}