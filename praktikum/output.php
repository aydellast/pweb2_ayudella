<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Data yang Dikirim</h1>

        <?php
        //periksa metode pengiriman data (POST atau GET)
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            //ambil data dari POST
            $nama = isset($_POST['nama']) ? $_POST['nama']: '';
            $email = isset($_POST['email']) ? $_POST['email']: '';
            $checkbox = isset($_POST['checkbox']) ? $_POST['checkbox']: '';
            $message = isset($_POST['message']) ? $_POST['message']: '';

            $datauser = array(
                "nama: " => $nama,
                "email: " => $email,
                "checkbox: " => $checkbox,
                "message: " => $message,
            );

        //tampilkan data yang dikirim
        echo "<h2> Data yang dikirim melalui POST:</h2>";
        echo '<class="list-group">';

        foreach ($datauser as $key => $value){
            if (!empty($value)){
                echo '<li class="list-group-item"><strong>'.ucfirst($key) .'</strong>' .htmlspecialchars($value) 
                .'</li>';

            }
        }

        }
        ?>
    </div>

</body>
</html>