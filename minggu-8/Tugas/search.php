<?php
    $cari=$_POST['nama']; 
     $conn=mysqli_connect("localhost","root","");
       mysqli_select_db($conn,"gitra");
         $hasil=mysqli_query($conn,"select * from mahasiswa where Nama like '%$cari%'");
                 echo "<br>";
                   if($baris=mysqli_fetch_array($hasil))    {    
                       echo "NRP : ";
                           echo $baris[0];
                               echo "<br>";
                                   echo "Nama : "; 
                                      echo $baris[1]; 
                                         echo "<br>";
                                             echo "Alamat :"; 
                                                echo $baris[2];
                                                echo "<br>";
                                                echo "Jurusan :"; 
                                                   echo $baris[3];
                                                 } 
                                                 ?>
                                                 