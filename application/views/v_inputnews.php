<!DOCTYPE html>
<html>
<head>
    <title>Membuat Input Berita</title>
</head>
<body>
        <center>    
        <h1 style="background-color:rgb(255,99,71);">Berita</h1>
        <h3 style="background-color:rgb(0,96,90);">Input Data Berita Baru</h3>
        </center>    
    <form action="<?php echo base_url(). 'news/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>   
            <tr>
                <td>Headline News</td>
                <td><input type="text" name="headline_news"></td>
            </tr>
            <tr>
                <td>Deskripsi News</td>
                <td><input type="text" name="deskripsi_news"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td>Tanggal Publikasi</td>
                <td><input type="date" name="tgl_publikasi"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><select name="kategori">
                        <option value='olahraga'>Olahraga</option>
                        <option value='opini'>Berita Opini</option>
                        <option value='langsung'>Berita Langsung</option>
                        <option value='interpretatif'>Berita Interpretatif</option>
                        <option value='penjelasan'>Berita Penjelasan</option>
                        <option value='investigasi'>Berita Investigasi</option>
                        <option value='komprehensif'>Berita Komprehensif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form> 
</body>
</html>
