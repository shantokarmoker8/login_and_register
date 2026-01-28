<?php
    include('connection.php');
    include('navbar.php');
    session_start();

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
    <h1>Welcome to User Page</h1>

    <h3>
      User ID <span><?php echo $_SESSION['user'] ?? ''; ?></span>
    </h3>

    <p>
      You have full control over the system. From here, you can manage users,
      monitor activities, and control application settings.
    </p>
    <a href="logout.php"><button class="btnn">Logout</button></a>
  </div>
</div>


    <!-- <div class="user-page hero">
        <h2>Welcome to User page</h2>
        <p>User : <span><?php echo $_SESSION['user']; ?></span></p>
        <a href="logout.php"><button class="btnn">Logout</button></a>
    </div> -->
</body>
</html>