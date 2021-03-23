<?php

include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
    <div >
        <p>ID <?php echo $_SESSION['id']; ?></p>
       <p>NAME<?php echo $_SESSION['username']; ?></p>
       <p>Email <?php echo $_SESSION['email']; ?></p>
       <p>USER TYPE <?php echo $_SESSION['users']; ?></p>
        <p><a href="Go Home.php">admin.php</a></p>
    </div>
</body>
</html>
