<?php
if(isset($_POST['btnSubmit'])){
    $judul = $_POST["title"];
    $kategori = $_POST["genre"];
    $tgl = $_POST["date"];
    $bul = $_POST["month"];
    $thn = $_POST["year"];
    $tglPinjam = date_create($thn."-".$bul."-".$tgl);
    $date = date_format($tglPinjam, "d M Y");
    $waktu = $_POST["time"];
    echo "Judul Buku: $judul.<br>";
    echo "Kategori: $judul.<br>";
    echo "Tanggal Pinjam: $date.<br>";
    echo "Lama Pinjam: $waktu hari.<br>";
    echo "Biaya Sewa: Rp.$waktu.<br>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Penyewaan</title>
</head>
<body>
</body>
</html>