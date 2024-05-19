<!--Nomor 7-->
<?php
    session_start(); // Mulai session

    $name = $email = "";
    $nameErr = $emailErr = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["u"])) {
            $nameErr = "Masukkan username";
        } else {
            $name = bersihkan_input($_POST["u"]);
        }
        if (empty($_POST["p"])) {
            $emailErr = "Masukkan password";
        } else {
            $email = bersihkan_input($_POST["p"]);
        }

        // Cek apakah username dan password sesuai
        // Di sini Anda mungkin ingin memeriksa dengan basis data atau sumber data lainnya
        if ($name == "shaffa" && $email == "admin") {
            // Simpan informasi login ke dalam session
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $name;
            
            // Redirect ke halaman selamat datang
            header("Location: welcome.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title</title>
        <style>
            .error {
                color: red; /* Warna merah */
                font-size: smaller; /* Ukuran font lebih kecil */
            }
        </style>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Username: <input type="text" name="u">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            Password: <input type="password" name="p">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>