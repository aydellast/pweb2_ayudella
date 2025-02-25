<!DOCTYPE html>
<html lang="en">
<head>
    <title>belajar php</title>
</head>
<body>
    <h1>Selamat Belajar PHP</h1>
    <?php
            $_nama = "Della";
            $_umur = "18";
            $_prodi = "Teknik Informatika";
            $_ipk = "3,8";

    ?>
    <p>Nama : <?php echo $_nama; ?> </p>
    <p>Umur : <?=$_umur?> </p>
    <p>Prodi : <?php echo $_prodi; ?></p>
    <p>IPK : <?=$_ipk?></p>

    <hr>
    <?php 
        echo "Apa kabar $_nama?"
    ?>
</body>
</html>