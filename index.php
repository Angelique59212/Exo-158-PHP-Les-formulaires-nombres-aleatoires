<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nombre aléatoire</title>
</head>
<body>
    <form action="number.php" method="post">
        <label for="x"></label>
        <input type="number" id="x" min="10" name="x" required>

        <label for="y"></label>
        <input type="number" id="y" max="50" name="y" required>

        <input type="submit" name="submit">
    </form>
</body>
</html>
