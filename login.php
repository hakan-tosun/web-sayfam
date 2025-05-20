<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dogru_email = "b231210018@sakarya.edu.tr";
$dogru_sifre = "b231210018";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? '';
    $sifre = $_POST["password"] ?? '';

    if ($email === $dogru_email && $sifre === $dogru_sifre) {
        echo "<h2 style='text-align: center; margin-top: 50px;'>Hoşgeldiniz <strong>" . htmlspecialchars($sifre) . "</strong></h2>";
    } else {
        // Yanlış bilgi girilirse login.html'e hata parametresiyle geri dön
        header("Location: login.html?error=1");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}