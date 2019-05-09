<?php
// เชื่อมต่อกับ database
require "config/connect_mysql.php";
$msg = "";
//รับค่าไอดีที่จะแก้ไข
$id = $_GET['id'];

if (!empty($_POST["submit"]))
{

//รับค่าจากฟอร์ม ใช้ Method POST
    $fulname  = $_POST["fulname"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
    $tel      = $_POST["tel"];
    $status   = $_POST["status"];
    $sql      = "UPDATE members
                 SET fulname='$fulname',
                     email = '$email',
                     password = '$password',
                     tel = '$tel',
                     status = '$status'
                WHERE id='$id'";
    $query = mysqli_query($connectdb, $sql);

    if ($query)
    {
        $msg = "<div class='alert alert-success'>Edit member success</div>";
    }
    else
    {
        $msg = "<div class='alert alert-danger'>Edit member fail</div>";
    }
}

//ดึงข้อมูล member ตามหมายเลข id
$sql_select = "SELECT * FROM members WHERE id='$id' ";
//read date in table
$query_select = mysqli_query($connectdb, $sql_select);
$data         = mysqli_fetch_assoc($query_select);

?>
 <!--ใช้คำสั่ง <div class="jumbotron">  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="jumbotron bg-info text-light">
    <h1 class="display-4">Edit member</h1>

</div>
<div class="container">
    <?php echo $msg; ?>
    <form method="POST" action="update_member.php?id=<?php echo $id; ?>">
        <div class="form-group row">
            <label for="fulname" class="col-sm-3 col-form-label">fullname</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="fulname" id="fulname" placeholder=""
                 required value ="<?php echo $data["fulname"]; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">e-mail</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="email" id="email" placeholder="" required
                 value="<?php echo $data["email"]; ?>">

            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">password</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="password" id="password" placeholder="" required
                value="<?php echo $data["password"]; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tel" class="col-sm-3 col-form-label">Tel</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="tel" id="tel" placeholder="" required
                value="<?php echo $data["tel"]; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="status" id="status" placeholder="" required
                value="<?php echo $data["status"]; ?>">
            </div>
        </div>

        <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <input type="submit" name="submit" value="submit"class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-3.4.1.min.js"></script>
</body>

</html>
