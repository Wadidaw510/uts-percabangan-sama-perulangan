<?php
// Program Hitung Gaji Karyawan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_037 = $_POST['nama'];
    $golongan_037 = strtoupper($_POST['golongan']); // Konversi ke huruf besar
    
    // Inisialisasi variabel
    $jabatan_037 = "";
    $gaji_pokok_037 = 0;
    $tunjangan_jabatan_037 = 0;
    $ppn_037 = 0;
    $gaji_bersih_037 = 0;
    
    // Tentukan gaji pokok dan tunjangan berdasarkan golongan
    switch ($golongan_037) {
        case 'A':
            $jabatan_037 = "Direktur";
            $gaji_pokok_037 = 6000000;
            $tunjangan_jabatan_037 = 0.10 * $gaji_pokok_037;
            break;
        case 'B':
            $jabatan_037 = "Manager";
            $gaji_pokok_037 = 5500000;
            $tunjangan_jabatan_037 = 0.05 * $gaji_pokok_037;
            break;
        case 'C':
            $jabatan_037 = "Karyawan";
            $gaji_pokok_037 = 4000000;
            $tunjangan_jabatan_037 = 0.02 * $gaji_pokok_037;
            break;
        case 'D':
            $jabatan_037 = "OB";
            $gaji_pokok_037 = 2000000;
            $tunjangan_jabatan_037 = 0.01 * $gaji_pokok_037;
            break;
        default:
            $jabatan_037 = "Tidak Diketahui";
            $gaji_pokok_037 = 0;
            $tunjangan_jabatan_037 = 0;
            break;
    }
    
    // Hitung PPN dan Gaji Bersih
    $ppn_037 = 0.10 * $gaji_pokok_037;
    $gaji_bersih_037 = $gaji_pokok_037 + $tunjangan_jabatan_037 - $ppn_037;
    
    // Format angka untuk tampilan
    function formatRupiah($angka_037) {
        return 'Rp ' . number_format($angka_037, 0, ',', '.');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Program Hitung Gaji Karyawan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2>Program Hitung Gaji Karyawan</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="golongan">Golongan:</label>
                <input type="text" id="golongan" name="golongan" required placeholder="A, B, C, atau D">
            </div>
            <button type="submit">Hitung Gaji</button>
        </form>
        
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="result">
            <h3>Hasil Perhitungan Gaji</h3>
            <table>
                <tr>
                    <th>Nama</th>
                    <td><?php echo htmlspecialchars($nama_037); ?></td>
                </tr>
                <tr>
                    <th>Golongan</th>
                    <td><?php echo $golongan_037; ?></td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td><?php echo $jabatan_037; ?></td>
                </tr>
                <tr>
                    <th>Gaji Pokok</th>
                    <td><?php echo formatRupiah($gaji_pokok_037); ?></td>
                </tr>
                <tr>
                    <th>Tunjangan Jabatan</th>
                    <td><?php echo formatRupiah($tunjangan_jabatan_037); ?></td>
                </tr>
                <tr>
                    <th>PPN (10%)</th>
                    <td><?php echo formatRupiah($ppn_037); ?></td>
                </tr>
                <tr>
                    <th>Gaji Bersih</th>
                    <td><?php echo formatRupiah($gaji_bersih_037); ?></td>
                </tr>
            </table>
        </div>
        <?php endif;
         ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
     </div>
</body>
</html>