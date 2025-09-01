<!DOCTYPE html>
<html>

<head>
    <title>Cek Ganjil atau Genap</title>
    <link rel="stylesheet" href="ganjil_genap1.css">
</head>

<body>

    <div class="container">
        <h2>Cek Ganjil atau Genap</h2>
        <form method="post" style="width: 100%;">
            <label for="angka">Masukkan angka (pisahkan dengan koma):</label>
            <input type="text" id="angka" name="angka" placeholder="Contoh: 4,7,10,15" required>
            <input type="submit" name="cek" value="Cek Sekarang">
        </form>

        <?php
        // Function, untuk menentukan apakah angka ganjil atau genap
        function CekGanjilGenap($angka)
        {
            if ($angka % 2 == 0) {
                return "$angka adalah <strong>Genap</strong>.";
            } else {
                return "$angka adalah <strong>Ganjil</strong>.";
            }
        }

        // Sequence: proses urut dari input → explode → loop → output
        if (isset($_POST['cek'])) {
            $input = $_POST['angka'];
            $DaftarAngka = explode(",", $input);

            echo "<h3>Hasil:</h3><ul>";

            // Iteration: proses pengecekan satu per satu
            foreach ($DaftarAngka as $angka) {
                $angka = trim($angka);
                if (is_numeric($angka)) {
                    echo "<li>" . CekGanjilGenap($angka) . "</li>";
                } else {
                    echo "<li>$angka bukan angka yang valid.</li>";
                }
            }

            echo "</ul>";
        }
        ?>
    </div>

</body>

</html>