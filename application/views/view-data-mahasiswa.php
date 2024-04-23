<html>
    <head>
        <title>Tampil Data Mahasiswa</title>
        <title>Web Prog II | Form Input Daftar Riwayat Hidup</title> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylemahasiswapost.css"> 
    </head>

    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <?= $nim; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <?= $name; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td> 
                    <td>:</td>
                    <td>
                        <?= $tanggal;?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <?= $tempat; ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?= $alamat; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('mahasiswa'); ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>