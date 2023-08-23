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
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form class="form-floating mb-3" action="index.php" method="get">
            <input class="form-control mb-3" type="number" id="passLength" name="passLength" min="8" max="32" placeholder="8" required>
            <label for="passLength">Lunghezza password:</label>
            <button class="btn btn-primary" type="submit">Genera</button>
        </form>
        <?php
        include 'functions.php';
        
        if (isset($_GET['passLength'])) {
            $passLength = $_GET['passLength'];

            $generatedPassword = generateStrongPassword($passLength);

            echo "<h2>La tua password è:</h2>";
            echo "<p>$generatedPassword</p>";
        }
        ?>
    </div>


</body>

</html>