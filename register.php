<?php
    include("connection.php");
    include("navbar.php");

    $msg="";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $user_type = $_POST['user_type'];

        $select1 = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
        $select_user = mysqli_query($con, $select1);
        if(mysqli_num_rows($select_user) > 0){
            $msg = "user already exist!";
        }else{
            $insert1 = "INSERT INTO `users`(`name`, `email`, `password`, `user_type`) VALUES ('$name','$email','$password','$user_type')";
            mysqli_query($con, $insert1);
            header("location: login.php");
            }
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <h2>Registration</h2>
            <p class="msg"><?php echo $msg;?></p>
           <div class="d-grid gap-2">
             <div class="form-group">
                <input type="text" name="name" id="" placeholder="Enter Your Name" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="" placeholder="Enter Your Email" class="form-control" require>
            </div>
            <div class="form-group">
                <select name="user_type" id="" class="form-control">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="" placeholder="Enter Your Password" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" id="" placeholder="Confirm Your Password" class="form-control" require>
            </div>
            <button name="submit" class="btnn">Register Now</button>
            <p>Already have an Account? <a href="login.php">Login Now</a></p>
           </div>
        </form>
    </div>
</body>
</html>