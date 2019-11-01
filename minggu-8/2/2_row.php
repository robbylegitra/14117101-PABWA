<!DOCTYPE html>
<html>
    <head>
        <title>Koneksi Database MySQLi</title>
    </head>
    <body>
        <h1>Demo koneksi database MySQLi fetch Row</h1>
        <?php
            $conn=mysqli_connect("localhost","root","") or die ("koneksi gagal");
            mysqli_select_db ($conn,"gitra");
            $hasil = mysqli_query($conn,"select * from liga");
            while ($row=mysqli_fetch_row($hasil)) {
                echo "Liga " .$row[1];
                echo " mempunyai ".$row[2];
                echo " wakil di liga champion <br>";
            }
        ?>
</body>
</html>