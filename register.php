<?php
    include("connection.php");
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
            <p class="msg"></p>
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
                <input type="password" name="password" id="" placeholder="Confirm Your Password" class="form-control" require>
            </div>
            <button name="submit" class="btn btn-primary">Register Now</button>
            <p>Already have an Account? <a href="login.php">Login Now</a></p>
        </form>
    </div>
</body>
</html>