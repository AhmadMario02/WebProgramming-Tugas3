<?php
if(isset($_POST['btnSubmit'])){
    $judul = $_POST["title"];
    $kategori = $_POST["genre"];
    $tgl = $_POST["date"];
    $bul = $_POST["month"];
    switch ($bul) {
        case "Januari":
            $bul = 1;
            break;
        case "Februari":
            $bul = 2;
            break;
        case "Maret":
            $bul = 3;
            break;
        case "April":
            $bul = 4;
            break;
        case "Mei":
            $bul = 5;
            break;
        case "Juni":
            $bul = 6;
            break;
        case "Juli":
            $bul = 7;
            break;
        case "Agustus":
            $bul = 8;
            break;
        case "September":
            $bul = 9;
            break;
        case "Oktober":
            $bul = 10;
            break;
        case "November":
            $bul = 11;
            break;
        case "Desember":
            $bul = 12;
    }

    if ($kategori == "Karya Ilmiah") {
        $hargaSewa = 10000;
    } else $hargaSewa = 5000;
    $thn = $_POST["year"];
    $tglPinjam = date_create($thn."-".$bul."-".$tgl);
    $date = date_format($tglPinjam, "d M Y");
    $waktu = $_POST["time"];
    $biaya = $hargaSewa * $waktu;
    echo "Judul Buku: $judul.<br>";
    echo "Kategori: $kategori.<br>";
    echo "Tanggal Pinjam: $date.<br>";
    echo "Lama Pinjam: $waktu hari.<br>";
    echo "Biaya Sewa: Rp.$biaya.<br>";

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