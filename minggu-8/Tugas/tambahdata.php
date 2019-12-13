<html>
    <head>
        <title>Hasil tambah data</title>
</head>

<body>
    <?php
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    if($jurusan == "Telekomunikasi"){
        $id_jurusan = "1";
    }
    else if($jurusan == "Elka"){
        $id_jurusan = "2";
    }
    else if ($jurusan == "IT"){
        $id_jurusan = "3";
    }
    else{
        $id_jurusan = "4";
    }
            
    $conn = mysqli_connect ("localhost","root","") or die ("Koneksi tidak berhasil");
    
    mysqli_select_db($conn, "gitra");
    $sqlstr =  "insert into mahasiswa (NRP, Nama, Alamat)
                values ('$nrp','$nama','$alamat')";
    $hasil = mysqli_query($conn, $sqlstr);
    $sqlstrr =  "insert into Jurusan (Id_Jur, name)
                values ('$id_jurusan','$jurusan')";
    $hasil2 = mysqli_query($conn, $sqlstrr);
    echo "Tambah data berhasil!";
    ?>