<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="kalkulator.css">
</head>
<body>
<?php
if(isset($_POST['hitung'])){
    $angka1=$_POST['angka1'];
    $angka2=$_POST['angka2'];
    $proses=$_POST['proses'];
    // membuat option perhitungan tambah kurang kali bagi
    // menggunakan perulangan switch karna dsini akan memilih salah satu dari banyak kode yang akan di eksekusi
    switch($proses){
        case'tambah':
            $jumlah=$angka1+$angka2;
        break;
        case'kurang':
            $jumlah=$angka1-$angka2;
        break;
        case'kali':
            $jumlah=$angka1*$angka2;
        break;
        case'bagi':
            $jumlah=$angka1/$angka2;
        break;
    }
    
}

?>
<!-- proses input -->
<div class="kalkulator">
    <h2 class="judul">Kalkulator Sederhana</h2>
    <!-- untuk form action nya menggunakan file ini sndiri jadi supaya tmpil di halaman ini langsung -->
    <form action="kalkulator.php" method="post">
    <input type="number" name="angka1" class="angka"  placeholder="Masukkan angka Pertama">
	<input type="number" name="angka2" class="angka"  placeholder="Masukkan angka Kedua">
    <select name="proses" class="pilihan">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select>
    <input type="submit" name="hitung" value="Hitung" class="button">	
    </form>
    <!-- hasil input -->
    <?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $jumlah; ?>" class="angka">
		<?php }else{ ?>
			<input type="text" value="0" class="angka">
		<?php } ?>
</div>
</body>
</html>