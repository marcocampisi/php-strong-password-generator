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
        <label for="passLength">Lunghezza password:</label>
        <input type="number" id="passLength" name="passLength" min="8" max="32" required>
        <button type="submit">Genera</button>
    </form>
    <?php
        if (isset($_GET['passLength'])) {
            $passLength = $_GET['passLength'];
            
            $generatedPassword = generateStrongPassword($passLength);

            echo "<h2>La tua password è:</h2>";
            echo "<p>$generatedPassword</p>";
        }

        function generateStrongPassword($length) {
            $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $lowercase = 'abcdefghijklmnopqrstuvwxyz';
            $numbers = '0123456789';
            $symbols = '!@#$%^&*()_+[]{}|';
            
            $characters = $uppercase . $lowercase . $numbers . $symbols;
            $password = '';
            
            for ($i = 0; $i < $length; $i++) {
                $randomIndex = rand(0, strlen($characters) - 1);
                $password .= $characters[$randomIndex];
            }
            
            return $password;
        }
    ?>
</body>
</html>