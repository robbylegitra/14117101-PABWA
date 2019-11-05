<?php
 // set masa berlakunya menjadi sejam yang lalu (sudah lewat)
 setcookie("user", "", time() - 3600);
 ?>
 <html>
 <body>

 <?php
 echo "Cookie 'user' terhapus.";
 ?>

 </body>
 </html>