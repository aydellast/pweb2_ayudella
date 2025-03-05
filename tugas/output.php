<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data yang Dikirim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data yang Dikirim</h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            $prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';
            $skill = isset($_POST['skill']) ? implode(", ", $_POST['skill']) : 'Tidak ada';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $uts = isset($_POST['uts']) ? $_POST['uts'] : 0;
            $uas = isset($_POST['uas']) ? $_POST['uas'] : 0;
            $tugas = isset($_POST['tugas']) ? $_POST['tugas'] : 0;
            
            $total_nilai = ($uts * 0.3) + ($uas * 0.3) + ($tugas * 0.4);
            
            switch (true) {
                case ($total_nilai >= 85):
                    $grade = 'A';
                    break;
                case ($total_nilai >= 80):
                    $grade = 'B';
                    break;
                case ($total_nilai >= 66):
                    $grade = 'C';
                    break;
                case ($total_nilai >= 36):
                    $grade = 'D';
                    break;
                default:
                    $grade = 'E';
                    break;
            }
            
            switch ($grade) {
                case 'A':
                    $predikat = 'Sangat Memuaskan';
                    break;
                case 'B':
                    $predikat = 'Memuaskan';
                    break;
                case 'C':
                    $predikat = 'Cukup';
                    break;
                case 'D':
                    $predikat = 'Kurang';
                    break;
                case 'E':
                    $predikat = 'Sangat Kurang';
                    break;
                default:
                    $predikat = 'Tidak Ada';
                    break;
            }
            
            $datauser = array(
                "NIM" => $nim,
                "Nama" => $nama,
                "Jenis Kelamin" => $gender,
                "Program Studi" => $prodi,
                "Skill" => $skill,
                "Email" => $email,
                "Nilai UTS" => $uts,
                "Nilai UAS" => $uas,
                "Nilai Tugas" => $tugas,
                "Total Nilai" => $total_nilai,
                "Grade" => $grade,
                "Predikat" => $predikat,
            );
            
            echo "<h2>Data yang dikirim melalui POST:</h2>";
            echo '<ul class="list-group">';
            
            foreach ($datauser as $key => $value) {
                if (!empty($value) || $value === 0) {
                    echo '<li class="list-group-item"><strong>' . ucfirst($key) . ':</strong> ' . htmlspecialchars($value) . '</li>';
                }
            }
            
            echo '</ul>';
        }
        ?>
    </div>
</body>
</html>
