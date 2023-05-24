<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "insert into `user-info` (name, email, mobile, password) values ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "data inserted successfully";
        header('location:display.php');
    } else {
        echo die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST">
        <label class="form-control">Name</label>
        <input autocomplete="off" type="text" class="form-control" placeholder="Enter your name" name="name">
        
        <label class="form-control">Email</label>
        <input autocomplete="off" type="email" class="form-control" placeholder="Enter your email" name="email">

        <label class="form-control">Mobile Number</label>
        <input autocomplete="off" type="text" class="form-control" placeholder="Enter your mobile phone number" name="mobile">
        
        <label class="form-control">Password</label>
        <input autocomplete="off" type="text" class="form-control" placeholder="Enter your password" name="password">

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>