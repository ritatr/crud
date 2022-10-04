<html>
<head>
    <title>Input Data mahasiswa</title>
</head>
<body>
    <center>
        <hl>Input Data mahasiswa</hl>
    </center>
    <form action="<?php echo base_url(). 'kampus/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" required></td>
            </tr>
            <tr>
                <td></td> 
                <td><input type="submit" value="Tambah"> <input type="reset" value="Batal"> <?php echo anchor('kampus/index','<input type=button value=Kembali>'); ?></td>
            </tr>
        </table>
    </form>
</body>
</html>


 