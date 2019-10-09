<?php
$angka = 37;
for ($a = 2; $a<=$angka; $a++) {
    $cek = 0;
        for ($b = 2; $b < $a; $b++) {
            if ($a % $b == 0) {
                $cek = 1;
            }
        }
        if ($cek == 0) {
            echo "$a ";
        }
    }
?>