<?php

require './../config/db.php';

if (isset($_POST['submit'])) {
    global $db_connect;

    // Ambil data dari form
    $name = mysqli_real_escape_string($db_connect, $_POST['name']);
    $price = mysqli_real_escape_string($db_connect, $_POST['price']);
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Bersihkan nama file dan buat nama random
    $imageName = pathinfo($image, PATHINFO_FILENAME); // Nama file tanpa ekstensi
    $imageExt = pathinfo($image, PATHINFO_EXTENSION); // Ekstensi file
    $randomFilename = time() . '-' . md5(rand()) . '.' . $imageExt;

    // Tentukan direktori tujuan
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
    $uploadPath = $uploadDir . $randomFilename;

    // Pastikan direktori tujuan ada, jika tidak buat
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Pindahkan file dari direktori sementara ke direktori tujuan
    $upload = move_uploaded_file($tempImage, $uploadPath);

    if ($upload) {
        // Simpan data ke database
        $query = "INSERT INTO products (name, price, image) 
                  VALUES ('$name', '$price', '/upload/$randomFilename')";
        $result = mysqli_query($db_connect, $query);

        if ($result) {
            echo "Berhasil upload";
        } else {
            echo "Gagal menyimpan ke database: " . mysqli_error($db_connect);
        }
    } else {
        echo "Gagal upload file.";
    }
} else {
    echo "Form tidak valid.";
}
