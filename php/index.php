<?php

$user="root";
$password="001230";

//获取json数据
$teamJson= $_POST;
foreach ($teamJson as $key => $value) {
    $a = $key;
}
$team = json_decode($a,true);

$name = $team['name'];
$classes = $team['classes'];
$phone = $team['phone'];
$prefer1 = department($team['prefer1']);
$prefer2 = department($team['prefer2']);
$introduction = $team['introduction'];
$hobby = $team['hobby'];
$regulate = regulate($team['regulate']);

//确定所选部门
function department($query){
    $result = NULL;
    if($query == 1){$result = "信息部";}
    if($query == 2){$result = "技术部";}
    if($query == 3){$result = "维修部";}
    if($query == 4){$result = "宣传部";}
    if($query == 5){$result = "微信团队";}
    if($query == 6){$result = "组织部";}
    if($query == 7){$result = "外联部";}
    return $result;
}

//判断是否服从调剂
function regulate($query){
    $result = NULL;
    if($query == 1){$result = "是";}
    if($query == 2){$result = "否";}
    return $result;
}


//创建链接
$pdo = new PDO('mysql:host=localhost; dbname=wuxie', $user, $password);
$sql = "INSERT INTO wuxieTable(name,classes,phone,prefer1,prefer2,introduction,hobby,regulate) VALUES('$name','$classes','$phone','$prefer1','$prefer2','$introduction','$hobby','$regulate')";
$result = $pdo->exec($sql);

if (! $result) {
    $pdo->errorInfo();
    echo ("报名失败。具体请联系负责人。");
}else{
    echo ("报名成功！期待您的加入，无协等你哦❤");
}
