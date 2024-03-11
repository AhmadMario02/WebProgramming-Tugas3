<?php
if(isset($_POST['okiedokie'])){
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
</head>
<body>
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
    <script>
        swal("Nicely Done!", "Your account has been signed up!", "success");
    </script>
</body>
</html>