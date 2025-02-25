<?php 
$ar_buah = ["a"=>"Anggur", "k"=>"Kelengeng", "s"=>"Sirsak", "n"=>"Nangka"];

        echo '<ol>';
        sort($ar_buah);
        echo '<hr/>';
        echo '</ol>';
        foreach ($ar_buah as $key =>$value) {
            echo '<li>'. $key . ' - ' . $value . '</li>';
        }
?>