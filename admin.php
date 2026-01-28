<?php
include('connection.php');
include('navbar.php');
session_start();

if(!isset($_SESSION['admin'])){
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="admin-container">
  <div class="admin-card">
    <h1>Welcome to Admin Page</h1>

    <h3>
      Admin ID <span><?php echo $_SESSION['admin'] ?? ''; ?></span>
    </h3>

    <p>
      You have full control over the system. From here, you can manage users,
      monitor activities, and control application settings.
    </p>
    <a href="logout.php"><button class="btnn">Logout</button></a>
  </div>
</div>

<!-- 
    <div class="user-page hero">
        <h2>Welcome to Admin page</h2>
        <p>Admin : <span><?php echo $_SESSION['admin'] ?? ''; ?></span></p>

        <a href="logout.php"><button class="btnn">Logout</button></a>
    </div> -->
</body>
</html>