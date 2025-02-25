<?php
$ar_buah = ["Semangka", "Strawberry", "Melon", "Pisang"];

echo "buah ke 2 adalah $ar_buah[2]";

echo "<br>Jumlah array;" . count ($ar_buah);

echo '<br> Seluruh buah <ol>';
    foreach($ar_buah as $_buah){
        echo '<li>'.$_buah. '</li>';
    }

echo '</ol>';
//menambah buah
$aR_buah[]="Nanas";

//hapus buah index kesatu
unset($ar_buah[1]);

//ubah index ke 3 menjadi Kurma
$ar_buah[4]="Kurma";

//cetak seluruh buah dengan indexnya
echo'<ul>';
foreach($ar_buah as $ak => $av){
    echo'<li>Index: '.$ak.' - Nama buah: '.$av.' </li>';
}
?>
