<!DOCTYPE html>
<html>
<head>
    <title>Daftar Merk Kendaraan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <center>
    <div class="container">
        <h2>Daftar Merk Kendaraan</h2>
<?php

$merk_kendaraan_037 = [
    'a' => 'Toyota',
    'b' => 'Honda',
    'c' => 'Suzuki',
    'd' => 'Daihatsu',
    'e' => 'Chevrolet',
    'f' => 'Mitsubishi'
];
?>


        
        
            <?php foreach ($merk_kendaraan_037 as $key_037 => $merk_037): ?>
             <li><?php echo $key_037 . '. ' . $merk_037; ?></li>
            <?php endforeach; ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>
</html>