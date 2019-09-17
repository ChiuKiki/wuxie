<?php
//mysqli连接数据库
$con = mysqli_connect('localhost','root','001230');
if (!$con){
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"wuxie");
mysqli_set_charset($con, "utf8");

$sql="SELECT * FROM wuxieTable";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>姓名</th>
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
    echo "<td>" . $row['classes'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['prefer1'] . "</td>";
    echo "<td>" . $row['prefer2'] . "</td>";
    echo "<td>" . $row['introduction'] . "</td>";
    echo "<td>" . $row['hobby'] . "</td>";
    echo "<td>" . $row['regulate'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
