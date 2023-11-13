<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewpotr" content="width=devide-width, initial-scale=1.0"/>
        <title>Input Data</title>
</head>
<body>
    <?php foreach ($penumpang as $u):?>
        <form action="<?= base_url(). 'tiket/update';?>"
        method="POST"
        enctype="multipart/form-data">
        <table border="1" cellspacing="3" cellpadding="25">
            <tr>
                <td>
            <h3><b>TIKET ONLINE JAKARTA - MALAYSIA</b></h3>
        <pre>
            
<input type="hidden" name="id" value="<?=$u->id; ?>"></label>
<label for="username">Nama                     : <input type="text" name="nama" id="username" placeholder="Masukkan Nama" value="<?= $u->nama; ?>"></label>

<label>Pilih Kode Pesawat       : <select name="nama_pesawat">
            <option value="Garuda">Garuda</option>
            <option value="Merpati">Merpati</option>
            <option value="Batavia">Batavia</option>
                                    </select>

<label>Pilih Kelas              : </label><label for="kelas"><input type="radio" name="kelas" id="kelas" value="Eksekutif"> Eksekutif</label>
                           <label for="kelas"><input type="radio" name="kelas" id="kelas" value="Bisnis"> Bisnis</label>
                           <label for="kelas"><input type="radio" name="kelas" id="kelas" value="Ekonomi"> Ekonomi</label>

<label>Pilih Jumlah             : <select name="jumlah">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                </select>

    <input type="submit" value="Simpan" /> <?= anchor('tiket', '<input type="button" value="Batal" />'); ?>
</pre>
    </td>
</form>
<?php endforeach; ?>
</body>
</html>