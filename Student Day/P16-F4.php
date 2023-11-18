<?php
//LOOPING MATERI MAKE FOR - Each 
//Dipakai untuk array

$siswa = ["Ahmad", "Dudi", "Xindy", "Dedi", "Reka", "Ferti", "Dita"];
$siswa_short = sort($siswa);
foreach ($siswa as $no => $s) {
    echo ($no+1) .". $s <br>";
}