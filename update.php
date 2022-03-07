<?php
    include 'connect.php';
    $id = $_GET['updateid'];
    $sql = "select * from `crud` where id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
        $result = mysqli_query($con,$sql);
        if($result){
            // echo "update successfully";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>
<body>
        <div class="container my-5">
            <form method="POST">
                <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?=$name?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?=$email?>">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter your mobile phone" name="mobile" autocomplete="off" value="<?=$mobile?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="enter your password" name="password" value="<?=$password?>">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </form>
        </div>
</body>
</html>