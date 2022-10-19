<html>
<head>
    <title>Input Data mahasiswa</title>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url() ?>desain/css/style.css">
</head>
<body>
    <center>
        <hl>Input Data mahasiswa</hl>
        <label style="color:#FF0000"><?php echo validation_errors(); ?></label>  
    </center>
    <form action="<?php echo base_url(). 'kampus/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
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


 