<!DOCTYPE html>
<html>
<head>
   <title>Tampilan Data Transaksi Toko Sepatu</title>
</head>
<body>
    <center>
        <table>
            <tr>
            <th colspan="3">
            Tampilan Data Transaksi Toko Sepatu
            </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <td>Merek Sepatu</td>
                <td>:</td>
                <td>
                    <?= $merek; ?>
                </td>
            </tr>
            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <td>Harga Sepatu</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Tokosepatu') ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>