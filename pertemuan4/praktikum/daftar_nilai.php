<?php
require_once 'nilai_mahasiswa.php';

$data_mhs = [];

/** Data awal */
$data_mhs[] = new NilaiMahasiswa("Hakim", "Pemrograman Web", 30, 25, 15);
$data_mhs[] = new NilaiMahasiswa("Ihsan", "Dasar-Dasar Pemrograman", 12, 100, 100);
$data_mhs[] = new NilaiMahasiswa("Rian", "Basis Data", 80, 95, 90);

// Cek apakah ada data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $matkul = $_POST['matkul'] ?? '';
    $nilai_uts = (int) ($_POST['nilai_uts'] ?? 0);
    $nilai_uas = (int) ($_POST['nilai_uas'] ?? 0);
    $nilai_tugas = (int) ($_POST['nilai_tugas'] ?? 0);

    if (!empty($nama) && !empty($matkul)) {
        // Tambahkan ke variabel sementara, bukan session
        $data_mhs[] = new NilaiMahasiswa($nama, $matkul, $nilai_uts, $nilai_uas, $nilai_tugas);
    }
}
?>

<h3>Input Data Mahasiswa</h3>
<form method="POST" action="">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama"><br><br>
    <label for="matkul">Matkul</label>
    <input type="text" name="matkul" id="matkul"><br><br>
    <label for="nilai_uts">UTS</label>
    <input type="number" name="nilai_uts" id="nilai_uts"><br><br>
    <label for="nilai_uas">UAS</label>
    <input type="number" name="nilai_uas" id="nilai_uas"><br><br>
    <label for="nilai_tugas">Tugas</label>
    <input type="number" name="nilai_tugas" id="nilai_tugas"><br><br>
    <input type="submit" value="Simpan">
</form>

<h3>Daftar Nilai Mahasiswa</h3>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Mata Kuliah</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Tugas</th>
            <th>Nilai Akhir</th>
            <th>Kelulusan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($data_mhs as $mhs) {
            echo "<tr>";
            echo "<td>" . $nomor . "</td>";
            echo "<td>" . $mhs->nama . "</td>";
            echo "<td>" . $mhs->matakuliah . "</td>";
            echo "<td>" . $mhs->nilai_uts . "</td>";
            echo "<td>" . $mhs->nilai_uas . "</td>";
            echo "<td>" . $mhs->nilai_tugas . "</td>";
            echo "<td>" . number_format($mhs->getNA(), 2) . "</td>";
            echo "<td>" . $mhs->kelulusan() . "</td>";
            echo "</tr>";
            $nomor++;
        }
        ?>
    </tbody>
</table>
