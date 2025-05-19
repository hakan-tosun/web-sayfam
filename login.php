<?php
// Değişkenler
$dogru_email = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

// POST kontrolü
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? '';
    $sifre = $_POST["password"] ?? '';

    if ($email === $dogru_email && $sifre === $dogru_sifre) {
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head>
            <meta charset='UTF-8'>
            <title>Giriş Başarılı</title>
            <link rel='stylesheet' href='css/style.css'>
        </head>
        <body>
            <div style='margin-top: 100px; text-align: center;'>
                <h2>Hoşgeldiniz <strong>$sifre</strong></h2>
            </div>
        </body>
        </html>";
    } else {
        header("Location: login.html");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
