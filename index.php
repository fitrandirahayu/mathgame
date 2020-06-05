<?php
session_start();
require "koneksi.php";
// cek LOGIN
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Matematika</title>
    <!-- CSS -->
    <link rel="stylesheet" href="text.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <form action="result.php" method="post" align="center">
        <?php
        $firstnumber = rand(0, 20);
        $secondnumber = rand(0, 20);
        $_SESSION["hasil"] = $firstnumber + $secondnumber;
        echo "<h1>Halo, " . $_SESSION["nama"] . "</h1>
        <p>Lives " . $_SESSION["lives"] . "</p>
        <p>Skor " . $_SESSION["skor"] . "</p>";
        echo "<label for=jawab>" . $firstnumber . "+" . $secondnumber . "= </label>";
        ?>
        <input type="number" name="jawab" placeholder="Jawab disini" require>
        <button class="btn btn-warning" type="submit" name="submit">Submit</button><br>
        <br>
        <a href="logout.php" class="text-white">Bukan Anda? Klik disini untuk login akun anda.</a>
    </form>
    <div class="footer">
        <p>Copyright &copy;2020 Fitrandi Rahayu / K3518033</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
