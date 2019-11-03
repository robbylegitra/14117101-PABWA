<HTML>
    <HEAD>
        <title>Hapus Data Mahasiswa</title>
    </HEAD>
    <BODY>
        <h1>Hapus Data Mahasiswa</h1>
        <?php
            $del=isset ($_POST['NRP']);
            $conn=mysqli_connect("localhost","root","");
            mysqli_select_db($conn,"gitra");
            $sqlstr="Delete from mahasiswa where NRP='$del'";
            $hasil=mysqli_query($conn,$sqlstr) or die(mysqli_error());
            echo "Data dengan NRP : $del Sudah berhasil dihapus";
        ?>
    </BODY>
</HTML>