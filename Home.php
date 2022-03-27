<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Aplikasi Pengelola Keuangan &emsp; <a href='Home.php'>Login</a> <a href='Profile.php'>Profile</a> <a href='Logout.php'>Logout</a></h2>
    <h1>Halo <?php echo $_SESSION['namadepanSession']." ".$_SESSION['namatengahSession']." ".$_SESSION['namabelakangSession']?> Selamat Datang di Aplikasi Pengelola Keuangan</h1>
</body>
</html>