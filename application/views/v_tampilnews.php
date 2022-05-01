<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Berita</title>
</head>
<body>
    <center><h1>Berita</h1></center>
    <center><?= anchor('news/tambah','Tambah Data Berita'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Headline_news</th>
            <th>Deskripsi_news</th>
            <th>Penulis</th>
            <th>tgl_publikasi</th>
            <th>Kategori</th>
        </tr>
        <?php 
        $no = 1;
        foreach($news as $u){ 
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->judul?></td>
            <td><?php echo $u->headline_news ?></td>
            <td><?php echo $u->deskripsi_news ?></td>
            <td><?php echo $u->penulis ?>, </td>
            <td><?php echo $u->tgl_publikasi ?></td>
            <td><?php echo $u->kategori ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
