<!--Nomor 4-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <meta name="description" content="Belajar PHP">
        <meta name="keyword" content="234311028">
        <meta name="author" content="Shaffa Dwiaji">
    </head>
    <body>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
            <p><label>Pilih gambar yang akan diupload: </label><br>
                <input type="file" name="gambar" value="Pilih gambar" id="gambar1"></p>
            <input type="submit" value="Upload image" name="submit">
        </form>

        <?php
        $target_dir = "gambar/";
        $uploadOk = 1;

        // Cek apakah ada kiriman data dengan metode post
        if (isset($_POST["submit"])) {
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Cek apakah file berupa gambar
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                echo "File berupa gambar - " . $check["mime"] . ". <br>";
                $uploadOk = 1;
                // Simpan kedalam folder gambar
            } else {
                echo "File bukan gambar. <br>";
                $uploadOk = 0;
            }
        
            // Deteksi apakah ada file dengan nama yang sama
            if (file_exists($target_file)) {
                echo "File sudah ada. <br>";
                $uploadOk = 0;
            }

            // Cek ukuran gambar
            if ($_FILES["gambar"]["size"] > 500000) {
                echo "File anda terlalu besar. <br>";
                $uploadOk = 0;
            }

            // Filter format
            if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
                echo "Hanya file JPG, JPEG, PNG, dan GIF. <br>";
                $uploadOk = 0;
            }

            // Cek apakah $uploadOk telah sesuai kriteria
            if ($uploadOk == 0) {
                echo "File gagal diupload. ";
            } else {
                // proses upload gambar
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                    echo "File, ". htmlspecialchars( basename($_FILES["gambar"]["name"])). " berhasil upload.";
                } else {
                    echo "Maaf, ada error saat upload. ";
                }
            }
        }
        ?>
    </body>
</html>