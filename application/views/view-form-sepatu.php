<!-- views/view-form-sepatu.php -->
<html>
<head>
    <title>Form Input Sepatu</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylesepatu.css"> 
</head>
<body>
    <center>
        <form action="<?= base_url('sepatu/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">Form Input Sepatu</th>
                </tr>
                <tr> 
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="namo" id="namo" placeholder="required">
                        <div class="col-sm-6 col-danger"><?= form_error('namo');?></div>
                    </td>
                </tr>
                <tr>
                    <td>Nomer HP</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nohp" id="nohp" placeholder="required">
                        <div class="col-sm-6 col-danger"><?= form_error('nohp');?></div>
                    </td>
                </tr>
                <tr>
                    <td>Merk Sepatu</td>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk" onchange="getHarga(this.value)">
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucheri">Bucheri</option>
                        </select>
                        <div class="col-sm-6 col-danger"><?= form_error('merk');?></div>
                    </td>
                </tr>
                <tr>
                    <td>Ukuran Sepatu</td>
                    <td>:</td>
                    <td>
                        <?php
                        for ($i = 32; $i <= 44; $i++) {
                            echo '<input type="radio" name="ukuran" value="' . $i . '">' . $i . ' ';
                        }
                        ?>
                        <div class="col-sm-6 col-danger"><?= form_error('ukuran');?></div>
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