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
                <td>Upload Foto</td> 
                <td><input type="file" name="foto"></td>
            </tr>
            <tr>
                <td><input type="submit" value="tambah"><input type="reset" value="batal"><?php echo anchor('kampus/index','<input type= button value=kembali>');?></td>
            </tr>
        </table>
    </form>
</body>
</html>


 