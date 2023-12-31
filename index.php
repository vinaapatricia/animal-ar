<!DOCTYPE html>
<html>

<head>
    <title>Form Kritik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            color: #8D7B68;
            font-size: 36px;
            text-align: center;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333333;
        }

        textarea {
                width: 100%;
                padding: 10px;
            border-radius: 5px;
            border: 1px solid #8D7B68;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #C8B6A6;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #C8B6A6;
        }
    </style>
</head>

<body>
    <h2>Kritik dan Saran</h2>

    <form method="POST" action="koneksi.php">
        <textarea id="kritik" name="kritik" rows="4" cols="50"></textarea><br><br>
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>

</html>