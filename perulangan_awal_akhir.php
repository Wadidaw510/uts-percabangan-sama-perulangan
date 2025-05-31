<!DOCTYPE html>
<html>
<head>
    <title>Perulangan Penjumlahan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
<center>
<h2>Penjumlahan Deret Angka</h2>
<form method="POST">
    <label>Nilai Awal:</label>
    <input type="number" name="awal_037" required><br><br>

    <label>Nilai Akhir:</label>
    <input type="number" name="akhir_037" required><br><br>

    <label>Jenis Perulangan:</label>
    <select name="tipe_037">
        <option value="for">For</option>
        <option value="while">While</option>
        <option value="do_while">Do While</option>
    </select><br><br>

    <button type="submit" name="submit">Proses</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $awal_037 = (int) $_POST['awal_037'];
    $akhir_037 = (int) $_POST['akhir_037'];
    $tipe_037 = $_POST['tipe_037'];
    $jumlah_037 = 0;
    $output_037 = "";

    if ($awal_037 > $akhir_037) {
        echo "<p style='color:red;'>Nilai awal harus lebih kecil dari atau sama dengan nilai akhir.</p>";
    } else {
        switch ($tipe_037) {
            case 'for':
                for ($i_037 = $awal_037; $i_037 <= $akhir_037; $i_037++) {
                    $jumlah_037 += $i_037;
                    $output_037 .= $i_037;
                    if ($i_037 < $akhir_037) $output_037 .= "+";
                }
                break;

            case 'while':
                $i_037 = $awal_037;
                while ($i_037 <= $akhir_037) {
                    $jumlah_037 += $i_037;
                    $output_037 .= $i_037;
                    if ($i_037 < $akhir_037) $output_037 .= "+";
                    $i_037++;
                }
                break;

            case 'do_while':
                $i_037 = $awal_037;
                do {
                    $jumlah_037 += $i_037;
                    $output_037 .= $i_037;
                    if ($i_037 < $akhir_037) $output_037 .= "+";
                    $i_037++;
                } while ($i_037 <= $akhir_037);
                break;
        }

        echo "<h3>Hasil:</h3>";
        echo "<p>$output_037 = $jumlah_037</p>";
    }
}
?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>
