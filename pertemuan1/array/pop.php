<?php 
$siswa = ["Rian", "Febri", "Ansyah", "Tian"];

//menampilkan array awal
echo "<br>Array awal : <br>";
print_r($siswa);

//menghapus elemen akhir dari array
$orang_terakhir = array_pop($siswa);

//menampilkan array stlh penghapudsan elemen terakih
echo "<br>Elemen yang akan dihapus: $orang_terakhir<br>";

//menampilkan array setelah penghapusan
echo "<br>Array setelah penghapusan";
print_r($siswa);

?>