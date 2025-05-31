<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Terbesar dan Terkecil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <center>
        <h1> bilangan Terbesar dan Terkecil
    <form method="post">
        Bilangan 1: <input type="number" name="bil1_037"><br>
        Bilangan 2: <input type="number" name="bil2_037"><br>
        Bilangan 3: <input type="number" name="bil3_037"><br>
        <input type="submit" value="enter oi">
    </form>

<?php
class BesarKecil {
    public $bil1_037, $bil2_037, $bil3_037;
    public $bilbsr_037, $bilkcl_037;

    public function input_data($b1_037, $b2_037, $b3_037) {
        $this->bil1_037 = $b1_037;
        $this->bil2_037 = $b2_037;
        $this->bil3_037 = $b3_037;
    }

    public function proses() {
        // Menentukan bilangan terbesar
        if ($this->bil1_037 >= $this->bil2_037 && $this->bil1_037 >= $this->bil3_037) {
            $this->bilbsr_037 = $this->bil1_037;
        } else if ($this->bil2_037 >= $this->bil1_037 && $this->bil2_037 >= $this->bil3_037) {
            $this->bilbsr_037 = $this->bil2_037;
        } else {
            $this->bilbsr_037 = $this->bil3_037;
        }

        // Menentukan bilangan terkecil
        if ($this->bil1_037 <= $this->bil2_037 && $this->bil1_037 <= $this->bil3_037) {
            $this->bilkcl_037 = $this->bil1_037;
        } else if ($this->bil2_037 <= $this->bil1_037 && $this->bil2_037 <= $this->bil3_037) {
            $this->bilkcl_037 = $this->bil2_037;
        } else {
            $this->bilkcl_037 = $this->bil3_037;
        }
    }

    public function output_data() {
        echo "Bilangan terbesar adalah: " . $this->bilbsr_037 . "<br>";
        echo "Bilangan terkecil adalah: " . $this->bilkcl_037;
    }
}

// Eksekusi saat form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $b1_037 = $_POST['bil1_037'];
    $b2_037 = $_POST['bil2_037'];
    $b3_037 = $_POST['bil3_037'];

    $obj = new BesarKecil();
    $obj->input_data($b1_037, $b2_037, $b3_037);
    $obj->proses();
    $obj->output_data();
}
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>
