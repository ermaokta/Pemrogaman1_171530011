<html>
    <head>
        <title>Pengolahan Form 1</title>
    </head>

    <body>
        <form action="" method="POST" name="input">
        Nama anda : <input type="text" name="nama"><br>
        <input type="submit" name="Input" value="input">
        </form>
    </body>
</html>

<?php
    if (isset9($_POST['input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b>";
    }
?>