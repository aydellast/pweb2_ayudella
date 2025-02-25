<?php
$laptop = ["HP", "Asus", "Macbook", "Lenovo"];

//menab\mbah elemen
array_unshift($laptop, "Dell", "Acer");

//hasil
echo "Hasil";
foreach ($laptop as $p) {
    echo "<br>".$p;
}



?>