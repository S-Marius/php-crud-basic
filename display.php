<?php
include 'connect.php';
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
    <h1>Users in database</h1>

    <button><a href="user.php">Add User</a></button>

    <table>
        <tr>
            <td id="table-top">ID</td>
            <td id="table-top">Name</td>
            <td id="table-top">Email</td>
            <td id="table-top">Mobile Phone</td>
            <td id="table-top">Password</td>
            <td id="table-top">Operations</td>
        </td>

        <tbody>
            <?php
                $sql = "Select * from `user-info`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row=mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                            <td>
                                <button id="update"><a href="update.php?updateid='.$id.'">Update</a></button>
                                <button id="delete"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                            </td>
                        </tr>
                        ';
                    }
                }
            ?>
            </tbody>
            
        </table>
</body>
</html>
