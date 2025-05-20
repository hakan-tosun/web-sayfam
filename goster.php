<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Gönderilen Bilgiler</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">Gönderilen Form Bilgileri</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<ul class='list-group'>";
        foreach ($_POST as $key => $value) {
            $etiket = ucfirst($key);
            echo "<li class='list-group-item'><strong>$etiket:</strong> " . htmlspecialchars($value) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<div class='alert alert-warning'>Formdan veri gönderilmedi.</div>";
    }
    ?>

    <a href="iletisim.html" class="btn btn-secondary mt-4">Geri Dön</a>
  </div>
</body>
</html>
