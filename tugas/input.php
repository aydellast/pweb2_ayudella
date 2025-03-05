<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h2 class="text-center">Form Registrasi</h2>
            <form action="output.php" method="POST">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label><br>
                    <input type="radio" name="gender" value="L" required> Laki-laki
                    <input type="radio" name="gender" value="P" required> Perempuan
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <select class="form-select" id="prodi" name="prodi">
                        <?php
                            $prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
                            foreach ($prodi as $key => $value) {
                                echo "<option value='$key'>$value</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Skill Web Programming</label><br>
                    <?php
                        $skills = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
                        foreach ($skills as $key => $value) {
                            echo "<input type='checkbox' name='skill[]' value='$key'> $key ";
                        }
                    ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="uts" class="form-label">Nilai UTS</label>
                    <input type="number" class="form-control" id="uts" name="uts" required>
                </div>
                <div class="mb-3">
                    <label for="uas" class="form-label">Nilai UAS</label>
                    <input type="number" class="form-control" id="uas" name="uas" required>
                </div>
                <div class="mb-3">
                    <label for="tugas" class="form-label">Nilai Tugas</label>
                    <input type="number" class="form-control" id="tugas" name="tugas" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
