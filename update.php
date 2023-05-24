<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `user-info` where id=$id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "update `user-info` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "data updated successfully";
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
        <input autocomplete="off" type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name;?>>
        
        <label class="form-control">Email</label>
        <input autocomplete="off" type="email" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email;?>>

        <label class="form-control">Mobile Number</label>
        <input autocomplete="off" type="text" class="form-control" placeholder="Enter your mobile phone number" name="mobile" value=<?php echo $mobile;?>>
        
        <label class="form-control">Password</label>
        <input autocomplete="off" type="text" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password;?>>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>