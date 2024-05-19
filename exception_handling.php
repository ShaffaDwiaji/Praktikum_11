<!--Nomor 8-->
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

    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["u"])) {
                throw new Exception("Masukkan username");
            } else {
                $name = bersihkan_input($_POST["u"]);
            }
            if (empty($_POST["p"])) {
                throw new Exception("Masukkan password");
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
            } else {
                throw new Exception("Username atau password salah");
            }
        }
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            .error {
                color: red; /* Warna merah */
                font-size: smaller; /* Ukuran font lebih kecil */
            }
        </style>
    </head>
    <body>
        <h2>Login</h2>
        <?php if(isset($errorMessage)) { ?>
            <div class="error"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Username: <input type="text" name="u">
            <br><br>
            Password: <input type="password" name="p">
            <br><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>