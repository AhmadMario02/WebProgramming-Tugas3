<?php
if(isset($_POST['btnSubmit'])){
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pw'];
    $tl = $_POST['bd'];
    $alamat = $_POST['address'];
    $telp = $_POST['no'];
    $jk = $_POST['gen'];
    $ps = $_POST['mjr'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Page</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Your Bio</h1>
    <label>Name: </label><?php echo $nama?><br>
    <label>E-Mail: </label><?php echo $email?><br>
    <label>Password: </label><?php echo $pass?><br>
    <label>Birthdate: </label><?php echo $tl?><br>
    <label>Address: </label><?php echo $alamat?><br>
    <label>Gender: </label><?php echo $jk?><br>
    <label>Major/Course: </label><?php echo $ps?><br>
    <p>You'll be directed to Login page...</p>
    <?php
    echo '<meta http-equiv="Refresh" content="5; URL=login.php">';
    ?>
    <script>swal("Nicely Done!", "Your account has been signed up!", "success");</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>