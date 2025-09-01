<!DOCTYPE html>
<html>

<head>
    <title>Cek Ganjil atau Genap (Banyak Angka)</title>
</head>

<body>
    <h2>Program Cek Ganjil atau Genap (Banyak Angka)</h2>

    <form method="post">
        <label>Masukkan angka (pisahkan dengan koma):</label><br>
        <input type="text" name="angka" placeholder="Contoh: 3,5,10,12" required><br><br>
        <input type="submit" name="cek" value="Cek">
    </form>

    <?php
    // Fungsi untuk mengecek satu angka
    function cekGanjilGenap($angka)
    {
        if ($angka % 2 == 0) {
            return "$angka adalah Genap.";
        } else {
            return "$angka adalah Ganjil.";
        }
    }

    // Proses saat tombol ditekan
    if (isset($_POST['cek'])) {
        $input = $_POST['angka'];

        // Pecah input berdasarkan koma
        $daftarAngka = explode(",", $input);

        echo "<h3>Hasil:</h3>";
        echo "<ul>";

        // Iterasi untuk setiap angka
        foreach ($daftarAngka as $angka) {
            $angka = trim($angka); // hilangkan spasi
            if (is_numeric($angka)) {
                echo "<li>" . cekGanjilGenap($angka) . "</li>";
            } else {
                echo "<li>$angka bukan angka yang valid.</li>";
            }
        }

        echo "</ul>";
    }
    ?>
</body>

</html>