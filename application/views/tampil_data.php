<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> Tampil Data</title>
    </head>
    <body>
        <table border="1" cellspacing="3" cellpadding="25">
            <tr>
                <td>
        <h3><b>PEMESANAN TIKET ONLINE JAKARTA - MALAYSIA</b>
    <pre>
        <?php
    $no = 1;
    foreach ($penumpang as $u):?><br>
    No Tiket       : <?= $no++; ?><br>
    Nama           : <?= $u->nama ?><br>
    Nama Pesawat   : <?= $u->nama_pesawat ?><br>
    Kelas          : <?= $u->kelas ?><br>
    Harga Tiket    : <?= $u->harga_tiket ?><br>
    Jumlah Tiket   : <?= $u->jumlah ?><br>
    Total          : <?= $u->harga_tiket*$u->jumlah ?><br>

    <?= anchor('tiket/edit/'.$u->id, '<input type="button" name="submit" value="Edit" />'); ?>  <?= anchor('tiket/hapus/'.$u->id, '<input type="button" name="submit" value="Delete" />'); ?>

        <?php endforeach; ?>    
    <?= anchor('tiket/tambah', '<input type="button" value="Tambah Data" />');?>
        </pre>
    </td>
    </body>
</html>