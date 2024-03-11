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
<body class="container">
    <h1>Biodata</h1>
    <form action="postPage.php" method="post">
    <div class="row g-2 my-2">
        <label for="name" class="form-label">Name</label>
            <input type="text" name="name" required class="form-control"><br>
    </div>
    <div class="row g-2 my-2">
        <label for="email" class="form-label">E-Mail</label>
            <input type="email" name="email" required class="form-control"><br>
    </div>
    <div class="row g-2 my-2">
        <label for="pw" class="form-label">Password</label>
            <input type="password" name="pw" required class="form-control"><br>
    </div>
    <div class="row g-2 my-2">
        <label for="bd" class="form-label">Birthdate</label>
            <input type="date" name="bd" class="form-control"><br>
    </div>
    <div class="row g-2 my-2">
        <label for="address" class="form-label">Address</label>
            <textarea name="address" class="form-control"></textarea><br>
    </div>
    <div class="row g-2 my-2">
        <label for="no" class="form-label">Phone</label>
            <input type="tel" name="no" placeholder="0852-9876-5432" required class="form-control"><br>
    </div>
    <div class="row g-2 my-2">
        <div class="col-2">
            <label for="gen" class="form-label">Gender</label>
        </div>
        <div class="col-4" class="form-check">
            <input type="radio" name="gen" value="Male" class="form-check-input">
            <label class="form-check-label">Male</label><br>
            <input type="radio" name="gen" value="Female" class="form-check-input">
            <label class="form-check-label">Female</label>
        </div>
    </div>
    <div class="row g-2 my-2">
        <label for="mjr" class="form-label">Major/Courses</label>
        <select name="mjr" required class="form-control">
            <option value="" selected>Select your Major/Course</option>
            <?php
                foreach($major as $mjr){
                ?>
                <option value="<?php echo $mjr?>"><?php echo $mjr?></option>
                <?php
                }?>
        </select><br>
    </div>
    <input type="submit" value="Sign Up" name="btnSubmit" class="btn btn-outline-success btn-lg">
    <input type="reset" value="Delete" name="reset" class="btn btn-outline-danger btn-lg">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>