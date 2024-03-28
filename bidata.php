<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
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
        input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Biodata</h2>
        <form method="post" action="">
            Nama: <input type="text" name="nama"><br>
            E-Mail: <input type="text" name="E-Mail"><br>
            Alamat: <input type="text" name="alamat"><br>
            <input type="submit" name="submit" value="Simpan">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $Mail = $_POST['E-Mail'];
            $alamat = $_POST['alamat'];

            echo "<h3>Biodata Anda:</h3>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Umur:</strong> $Mail</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
        }
        ?>
    </div>
</body>
</html>
