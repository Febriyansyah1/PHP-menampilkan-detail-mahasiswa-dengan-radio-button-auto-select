<?php
include "kelasMahasiswa.php";
$mhs = new mahasiswa();
$data = $mhs->menampilkan();
echo "<table border='2'>";
echo "<tr><td>No.</td><td>NAMA &nbsp</td><td>PROGDI &nbsp</td><td>JENIS KELAMIN &nbsp</td><td>DETAIL &nbsp</td></tr>";
$X=0;
foreach($data as $a){
    $X++;
    echo "<tr><td>".$X."</td><td>".$a["NAMA"]."</td><td>".$a["PROGDI"]."</td><td>".$a["KELAMIN"]."</td><td><a href='outputMahasiswa.php?user=$a[NAMA]'>Detail</a></td></tr>"; 
}
echo "</table>";


?>