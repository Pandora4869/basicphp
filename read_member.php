<?php
// เชื่อมต่อกับ database
require "config/connect_mysql.php";

$sql = "SELECT * FROM members ";
//read date in table
$query = mysqli_query($connectdb, $sql);

//นับจำนวนแถวที่พบในตาราง
$row = mysqli_num_rows($query);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron bg-info text-light">
        <h1 class="display-3"> Member Data</h1>


    </div>

    <div class="container-fluid">
<?php
echo "<h3>พบข้อมูลทั้งหมด", $row, "รายการ</h3>";
//ทำปุ่มสำหรับกดเพิ่มสมาชิกใหม่
echo "<p><a href='create_member.php'class='btn btn-success'>เพิ่มสมาชิกใหม่</a></p>";

//ทำการ loop ข้อมูลในตาราง

echo "<table class='table table-bordered'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Fulname</th>";
echo "<th>Email</th>";
echo "<th>tel</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while ($data = mysqli_fetch_assoc($query))
{
    echo "<tr>";
    echo "<td>", $data["id"], "</td>";
    echo "<td>", $data["fulname"], "</td>";
    echo "<td>", $data["email"], "</td>";
    echo "<td>", $data["tel"], "</td>";
    echo "<td>
              <a href='update_member.php?id=", $date["id"], "'class='btn btn-warning'>Edit</a>
              <a href='delete_member.php?id=", $data["id"], "'class='btn btn-danger'>Delete</a>
         </td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
</div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-3.4.1.min.js"></script>
</body>
</html>
