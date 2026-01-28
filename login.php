<?php
    session_start();
    include("connection.php");
    include("navbar.php");
    $msg="";

    if(isset($_POST['submit'])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $select1 ="SELECT * FROM `users` WHERE email = '$email' AND password = '$password' ";
        $select_user = mysqli_query($con, $select1);
        if(mysqli_num_rows($select_user) > 0){
            $row1 = mysqli_fetch_assoc($select_user);
            if($row1['user_type'] == 'user'){
                $_SESSION['user']= $row1['email'];
                $_SESSION['id']=$row1['id'];
                header("location: user.php");
            }
            elseif($row1['user_type']== 'admin'){
                 $_SESSION['admin']= $row1['email'];
                $_SESSION['id']=$row1['id'];
                header("location: admin.php");
            }
            else{
                $msg = "incorrect email and passowrd";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <h2>Login</h2>
            <p class="msg"><?php echo $msg;?></p>
            
            <div class="d-grid gap-2">
                <div class="form-group">
                <input type="email" name="email" id="" placeholder="Enter Your Email" class="form-control" require>
            </div>
        
            <div class="form-group">
                <input type="password" name="password" id="" placeholder="Enter Your Password" class="form-control" require>
            </div>
           
                 <button name="submit" class="btnn">Login Now</button>
            <p>Don't have an Account? <a href="register.php">Registration Now</a></p>
           </div>
            </div>
           
           
        </form>
    </div>
</body>
</html>