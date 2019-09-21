<?php
//mysqli连接数据库
$con = mysqli_connect('localhost','root','001230');
if (!$con){
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"wuxie");
mysqli_set_charset($con, "utf8");

//获取数据
$departmentValue = $_POST["department"];
$preferValue = $_POST["prefer"];
$department = department($departmentValue);
//$prefer = prefer($preferValue);

//确定所选部门
function department($query){
    $department = NULL;
    if($query == 0){$department = "all";}
    if($query == 1){$department = "信息部";}
    if($query == 2){$department = "技术部";}
    if($query == 3){$department = "维修部";}
    if($query == 4){$department = "宣传部";}
    if($query == 5){$department = "微信团队";}
    if($query == 6){$department = "组织部";}
    if($query == 7){$department = "外联部";}
    return $department;
}

/*
//确定所选志愿
function prefer($query){
    $prefer = NULL;
    if($query == 0){$prefer = "all";}
    if($query == 1){$prefer = "第一志愿";}
    if($query == 2){$prefer = "第二志愿";}
    return $prefer;
}
*/

//确定查询语句
function sql($departmentValue,$preferValue,$department){
    $sql = NULL;
    switch($preferValue){
        case "0":   //所有志愿
            if($departmentValue == 0){  //所有部门
                $sql="SELECT DISTINCT * FROM wuxieTable";
            }else{  //指定部门
                $sql = "SELECT DISTINCT * FROM wuxieTable WHERE prefer1='$department' OR prefer2='$department'";
            }
            break;
        case "1":   //第一志愿
            if($departmentValue == 0){  //所有部门
                $sql="SELECT DISTINCT * FROM wuxieTable";
            }else{  //指定部门
                $sql = "SELECT DISTINCT * FROM wuxieTable WHERE prefer1='$department'";
            }
            break;
        case "2":   //第二志愿
            if($departmentValue == 0){  //所有部门
                $sql="SELECT DISTINCT * FROM wuxieTable";
            }else{  //指定部门
                $sql = "SELECT DISTINCT * FROM wuxieTable WHERE prefer2='$department'";
            }
            break;
    }
    return $sql;
}

//查询
$sql =sql($departmentValue,$preferValue,$department);
$result = mysqli_query($con,$sql);

echo $department."：";

$num = 0;

echo "<table border='1'>
<tr>
<th>姓名</th>
<th>性别</th>
<th>班级</th>
<th>电话</th>
<th>第一志愿</th>
<th>第二志愿</th>
<th>自我介绍</th>
<th>个人特长</th>
<th>是否服从调剂</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['classes'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['prefer1'] . "</td>";
    echo "<td>" . $row['prefer2'] . "</td>";
    echo "<td>" . $row['introduction'] . "</td>";
    echo "<td>" . $row['hobby'] . "</td>";
    echo "<td>" . $row['regulate'] . "</td>";
    echo "</tr>";
    $num++;
}
echo "</table>";
echo "共".$num."条记录";

mysqli_close($con);
?>
