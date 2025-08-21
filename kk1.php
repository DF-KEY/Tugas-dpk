
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Kalkulator Belanja</h2>
    
    <form method="post">
        <label>Nama Barang :</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Harga Satuan :</label><br>
        <input type="number" name="harga" required><br><br>
        
        <label>Jumlah Beli :</label><br>
        <input type="number" name="jumlah" required><br><br>
        
        <label>Diskon (%) :</label><br>
        <input type="number" name="diskon" value="0"><br><br>
        
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {

        $namaBarang = $_POST['nama'];
        $harga = (int) $_POST['harga'];
        $jumlah = (int) $_POST['jumlah'];
        $diskonPersen = (float) $_POST['diskon'] / 100;

        $totalSebelumDiskon = $harga * $jumlah;
        $potongan = $totalSebelumDiskon * $diskonPersen;
        $totalAkhir = $totalSebelumDiskon - $potongan;

         echo "<h3>Struk Belanja</h3>";
        echo "<table>
                <tr><th>Nama Barang</th><td>$namaBarang</td></tr>
                <tr><th>Harga Satuan</th><td>Rp " . number_format($harga, 0, ',', '.') . "</td></tr>
                <tr><th>Jumlah Beli</th><td>$jumlah</td></tr>
                <tr><th>Total Sebelum Diskon</th><td>Rp " . number_format($totalSebelumDiskon, 0, ',', '.') . "</td></tr>
                <tr><th>Potongan Diskon</th><td>Rp " . number_format($potongan, 0, ',', '.') . "</td></tr>
                <tr><th>Total Bayar</th><td><b>Rp " . number_format($totalAkhir, 0, ',', '.') . "</b></td></tr>
              </table>";
    }
    ?>
</body>
</html>
