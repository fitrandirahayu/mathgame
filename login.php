<?php
session_start();
require "koneksi.php";

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
if (isset($_POST["login"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $_SESSION["nama"] = $nama;
    $_SESSION["skor"] = 0;
    $_SESSION["lives"] = 5;
    $_SESSION["login"] = true;
    $query = "INSERT INTO peserta SET nama='$nama', email='$email', skor=$_SESSION[skor]";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Game Math</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="text.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <center><h1>GAME MATEMATIKA</h1></center>
    <form action="" method="post" align="center">
        <div class="form group">

            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan Username Anda" required>

        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" placeholder="Masukkan Email Anda" required>
        </div>
        <button class="btn btn-warning" type="submit" name="login">Mulai</button>
    </form>
    <div class="footer" align="center">
        <p>Copyright &copy;2020 Fitrandi Rahayu / K3518033</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
