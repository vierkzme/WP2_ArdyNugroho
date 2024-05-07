<!-- views/view-data-sepatu.php -->
<html>
<head>
    <title>Tampil Data Sepatu</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylesepatupost.css"> 
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">Tampil Data Sepatu</th>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $namo; ?></td>
            </tr>
            <tr>
                <td>Nomer HP</td>
                <td>:</td>
                <td><?= $nohp; ?></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td> 
                <td>:</td>
                <td><?= $merk;?></td>
            </tr>
            <tr>
                <td>Harga Sepatu</td>
                <td>:</td>
                <td><?= $harga; ?></td>
            </tr>
            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                <td><?= $ukuran; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('sepatu'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
