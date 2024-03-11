<?php
$genre = array("Fiksi", "Non-Fiksi", "Karya Ilmiah", "Majalah");
$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penyewaan Buku</title>
</head>
<body>
    <h1>Form Penyewaan</h1>
    <form action="post.php" method="post">
        Judul Buku: <input type="text" name="title"><br>
        Kategori Buku: 
        <select name="genre">
            <option value="" selected>Pilih kategori:</option>
            <?php
            foreach($genre as $gnr){
            ?>
            <option value="<?php echo $gnr?>"><?php echo $gnr?></option>
            <?php
            }?>
        </select><br>
        Tanggal Pinjam: 
        <select name="date">
            <option value="" selected>Pilih tanggal:</option>
            <?php
            for($d=1;$d<=31;$d++){
            ?>
            <option value="<?php echo $d?>"><?php echo $d?></option>
            <?php
            }?>
        </select>
        <select name="month">
            <option value="" selected>Pilih bulan:</option>
            <?php
            foreach($bulan as $mon){
            ?>
            <option value="<?php echo $mon?>"><?php echo $mon?></option>
            <?php
            }?>
        </select>
        <select name="year">
            <option value="" selected>Pilih tahun:</option>
            <?php
            for($y=2023;$y<=2025;$y++){
            ?>
            <option value="<?php echo $y?>"><?php echo $y?></option>
            <?php
            }?>
        </select><br>
        Lama Pinjam: <input type="number" name="time"> hari<br>
        <input type="submit" name="btnSubmit" value="Simpan">
        <input type="reset" name="reset" value="Batal"><br>
    </form>
</body>
</html>