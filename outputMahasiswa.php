<?php

    include "tabelMahasiswa.php";
    echo "<br><br>";
    $NAMA = $_GET['user'];
    $mhs2 = new mahasiswa();
    $progdi = $mhs2->getProgdi();
    $tampil = $mhs2->tampilData($NAMA);
    $cek = $mhs2->cekKelamin($tampil['KELAMIN']);
    


echo "Nama : ".$tampil["NAMA"]."<br>";
echo "PROGDI : <select name='progdi'>";
    echo "<option value='".$tampil["PROGDI"]."'>".$tampil["PROGDI"]."</option>";
echo "</select><br>";

if($cek==true&&$tampil['KELAMIN']=="L"){
echo "<input type='checkbox' name='name2; value='c' checked>Laki-laki ";
echo "<input type='checkbox' name='name2; value='c' >Perempuan";
}
else{
echo "<input type='checkbox' name='name2; value='c' >Laki-laki ";
echo "<input type='checkbox' name='name2; value='c' checked>Perempuan";
}

?>