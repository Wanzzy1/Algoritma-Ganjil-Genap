<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post" action="">
        <label>Angka Pertama:</label><br>
        <input type="number" name="angka1" required><br><br>

        <label>Angka Kedua:</label><br>
        <input type="number" name="angka2" required><br><br>

        <label>Operasi:</label><br>
        <select name="operasi">
            <option value="tambah">Penjumlahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    function tambah($a, $b)
    {
        return $a + $b;
    }

    function kurang($a, $b)
    {
        return $a - $b;
    }

    function kali($a, $b)
    {
        return $a * $b;
    }

    function bagi($a, $b)
    {
        if ($b == 0) {
            return "Tidak bisa dibagi nol.";
        } else {
            return $a / $b;
        }
    }

    if (isset($_POST['hitung'])) {
        $a = $_POST['angka1'];
        $b = $_POST['angka2'];
        $op = $_POST['operasi'];

        switch ($op) {
            case 'tambah':
                $hasil = tambah($a, $b);
                break;
            case 'kurang':
                $hasil = kurang($a, $b);
                break;
            case 'kali':
                $hasil = kali($a, $b);
                break;
            case 'bagi':
                $hasil = bagi($a, $b);
                break;
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>

</html>