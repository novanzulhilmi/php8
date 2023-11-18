<?php
# IF 1 variabel
$hari = "Hujan";
if ($hari == "Hujan") {
    echo "UJAN UJAN UJAN";
} 

echo "<hr>";

## IF dengan 2 variabel
if ($hari == "Hujan") {
    echo "Saya bawa payung";
} else {
    echo "Saya tidak bawa payung";
}

echo "<hr>";

/*
Buat IF dengan 2 variable yang mengatakan Anda Lulus atau Tidak Lulus jika nilai yang didapat adalah >= 75
75 s/d 100 -lulus
0 s/d 74 -Tidak lulus
*/
$nilai = 55;
if ($nilai >= 75 AND $nilai <= 100) {
    echo "Nilai anda $nilai, <b>Anda Lulus</b>";
} elseif ($nilai >= 0 && $nilai < 74) {
    echo "Nilai anda $nilai, <b>Anda Tidak Lulus</b>";
} else {
    echo "Nilai anda $nilai, <u>Ngapain Salah</u>";
}

echo "<hr>";

#4 variabel
if ( ($nilai >= 91 AND $nilai <= 100) ) :
    echo "Nilai anda $nilai, <b>Nilai Anda A</b>";
elseif ( ($nilai >= 81 AND $nilai <= 90) ) :
    echo "Nilai anda $nilai, <b>Nilai Anda B</b>";
elseif ( ($nilai >= 71 AND $nilai <= 80) ) :
    echo "Nilai anda $nilai, <b>Nilai Anda C</b>";
elseif ( ($nilai >= 61 AND $nilai <= 70) ) :
    echo "Nilai anda $nilai, <b>Nilai Anda D</b>";
else :
    echo "Nilai anda $nilai, <b><u>MAKANYA BELAJAR</u></b>";
endif;

# A = Istimewa
# B = Baik
# C = Cukup
# D = Kurang
$hasil = "A";
if ($hasil == "A"){
    echo "Istimewa";
}elseif ($hasil == B){
    echo "Baik";
}elseif ($hasil == C){
    echo "Cukup";
}elseif ($hasil == D){
    echo "Kurang";
}else{
    echo "Nilai anda $hasil, <b><u>MAKANYA BELAJAR</u></b>";
}