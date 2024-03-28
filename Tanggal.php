<!DOCTYPE html>
<html>
<head>
    <title>Tanggalan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Informasi Tanggal dan Waktu</h2>
        <p><strong>Format tanggal dan waktu saat ini:</strong><br>
        <?php
        echo date("m-F-Y, g:i:s a") . "<br>";
        ?>
        </p>
        <p><strong>Format-format lainnya:</strong><br>
        <?php
        echo date("d/m/Y, H:i:s") . "<br>"; // Format tanggal dan waktu lainnya
        echo date("l, j F Y, G:i:s") . "<br>"; // Format tanggal dan waktu lainnya
        echo date("Y-m-d, g:i A") . "<br>"; // Format tanggal dan waktu lainnya
        ?>
        </p>
    </div>
</body>
</html>
