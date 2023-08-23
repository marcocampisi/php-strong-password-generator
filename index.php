<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore</title>
    <!-- FONT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="index.php" method="get">
        <input type="radio" id="short" name="length" value="1">
        <label for="short">Corta</label>
        <input type="radio" id="medium" name="length" value="2">
        <label for="medium">Media</label>
        <input type="radio" id="long" name="length" value="3">
        <label for="long">Lunga</label>
        <input type="submit" value="Genera">
    </form>
    <?php
        if (isset($_GET['length'])) {
            $length = $_GET['length'];
            $characters = array('abcdefghijklmnopqrstuvwxyz', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', '0123456789', '!@#$%^&*()_+{}|:<>?,./;[]');
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[mt_rand(0, count($characters) - 1)];
            }
            echo 'La tua password è: ' . $password;
        }
    ?>
</body>
</html>