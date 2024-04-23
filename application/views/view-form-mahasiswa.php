<html>
    <head>
        <title>Form Input Daftar Riwayat Hidup</title>
        <title>Web Prog II | Form Input Daftar Riwayat Hidup</title> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylemahasiswa.css"> 
    </head>

    <body>
        <center>
            <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Daftar Riwayat Hidup
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
                        <input type="text" name="nim" id="nim" placeholder="required">
                        <div class="col-sm-6 col-danger"><?= form_error('nim');?></div>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="name" id="name" placeholder="required">
                        <div class="col-sm-6 col-danger"><?= form_error('name');?></div>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal" id="tanggal" placeholder="required">
                        <div class="col-sm-6 col-danger"><?= form_error('tanggal');?></div>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat" placeholder="required">
                        <div class="col-sm-6 col-danger"><?= form_error('tempat');?></div>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Alamat Mahasiswa</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="required">
                        <div class="col-sm-6 col-danger"><?= form_error('alamat');?></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>