<?php
// เชื่อมต่อกับ database
require "config/connect_mysql.php";
$msg = "";
//รับค่าไอดีที่จะแก้ไข
$id = $_GET['id'];

$sql = "DELETE FROM members WHERE id='$id' ";
//read date in table
$query = mysqli_query($connectdb, $sql);

if ($query)
{
    echo "<div class='alert alert-success'>Delete member success</div>";
    echo "<meta http-equiv=\"refresh\"content=\"3;URL='read_member.php'\">";
}
else
{
    echo "<div class='alert alert-danger'>Delete member fail</div>";
}
