<!DOCTYPE html>
<html>
<head>
    <title>Form Kode Barang</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  
</head>
<body>

    <h2>masukan aja nomor barangnya</h2>
    <form method="POST">
        <input type="text" name="kode" placeholder="Masukkan disini saja " required>
        <button type="submit" name="submit">click boy</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $kode__037 = $_POST['kode'];

        echo "<strong> Hasil: </strong>";

        switch ($kode__037) {
            case 1:
            case "1":
                echo "Alat Olah Raga";
                break;
            case 2:
            case "2":
                echo "Alat Elektronik";
                break;
            case 3:
            case "3":
                echo "Alat Masak";
                break;
            default:
                echo "Salah Input Kode";
                break;
        }
    }
    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>
