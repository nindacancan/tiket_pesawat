<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Input Data</title>
</head>   
<body>
    <form action="<?=base_url().'index.php/tiket/tambah_aksi';?>"
    method="POST"
    enctype="multipart/form-data">
    <table border="1" cellspacing="3" cellpadding="25">
        <tr>
            <td>
    <h3><b>TIKET ONLINE JAKARTA - MALAYSIA</b></h3>
<pre>
<label for="username">Nama                : <input type="text" name="nama" id="username" placeholder="Masukkan Nama"></label>
   
<label>Pilih Kode Pesawat  : <select name="nama_pesawat">
            <option value="Garuda">GARUDA</option>
            <option value="Merpati">MERPATI</option>
            <option value="Batavia">BATAVIA</option>
            </select>
    
<label>Pilih Kelas         : </label> <label for="kelas"> <label for="kelas"><input type="radio" name="kelas" id="kelas" value="Eksekutif">Eksekutif</label>
                        <label for="kelas"><input type="radio" name="kelas" value="Bisnis">Bisnis</label>
                        <label for="kelas"><input type="radio" name="kelas" value="Ekonomi">Ekonomi</label>
    
<label>Jumlah              : <select name="jumlah">
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

    
    <input type="submit" name="submit" value="Simpan"/> <input type="reset" value="Reset"/> <?= anchor('tiket/index', '<input type="button" value="Kembali" class="kembali-1"/>');?><br>
    </pre>
    </td>
    </form>
</body>
<html>