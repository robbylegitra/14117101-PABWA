<?php
 session_start();
 include("functions.php");
 if(isset($_SESSION["user_id"])) {
 if(isLoginSessionExpired()) {
 header("Location:logout.php?session_expired=1");
 }
 }
 ?>
 <html>
 <head>
 <title>User PABW</title>
 <link rel="stylesheet" type="text/css" href="styles.css" />
 </head>
 <body>

 <table border="0" cellpadding="10" cellspacing="1" width="100%">
 <tr>
 <td align="center">User Dashboard</td>
 </tr>
 <tr>
 <td>
 <?php
 if(isset($_SESSION["user_name"])) {
 ?>
 Selamat datang <?php echo $_SESSION["user_name"]; ?>.
 Klik disini untuk<a href="logout.php" tite="Logout">Logout.
 <?php } ?>
 </td>
 </tr>
 </body>
 </html>