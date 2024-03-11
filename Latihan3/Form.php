<?php
$major = array("Manajemen",
            "Sistem Informasi",
            "Ilmu Komputer",
            "Teknik Industri",
            "Psikologi",
            "Ilmu Komunikasi",
            "Sastra Inggris");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>Biodata</h1>
    <form action="postPage.php" method="post">
    <label for="name">Name</label>
        <input type="text" name="name" required><br>
    <label for="email">E-Mail</label>
        <input type="email" name="email" required><br>
    <label for="pw">Password</label>
        <input type="password" name="pw" required><br>
    <label for="bd">Birthdate</label>
        <input type="date" name="bd"><br>
    <label for="address">Address</label>
        <textarea name="address"></textarea><br>
    <label for="no">Phone</label>
        <input type="tel" name="no" placeholder="0852-9876-5432" required><br>
    <label for="gen">Gender</label><br>
        <input type="radio" name="gen" value="Male">
        <label>Male</label><br>
        <input type="radio" name="gen" value="Female">
        <label>Female</label><br>
    <label for="mjr">Major/Courses</label>
    <select name="mjr" required>
        <option value="" selected>Select your Major/Course</option>
        <?php
            foreach($major as $mjr){
            ?>
            <option value="<?php echo $mjr?>"><?php echo $mjr?></option>
            <?php
            }?>
    </select><br>
    <input type="submit" value="Sign Up" name="btnSubmit">
    <input type="reset" value="Delete" name="reset">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>