<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Persegi Panjang</title>
    <style>
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: center;
        }
        input[type="text"], input[type="submit"] {
            width: 900px;
            margin-bottom: 10px;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Luas Persegi Panjang</h2>
        <form method="post" action="">
            Panjang: <input type="text" name="panjang"><br><br>
            Lebar: <input type="text" name="lebar"><br><br>
            <input type="submit" name="hitung" value="Hitung">
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $luas = $panjang * $lebar;
            echo "Luas Persegi Panjang dengan panjang $panjang dan lebar $lebar adalah: $luas";
        }
        ?>
    </div>
</body>
</html>
