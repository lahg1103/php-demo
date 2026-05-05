<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo - Result</title>
</head>
<body>
    <p>
        <?php echo $_POST["name"]; ?>
    </p>
    <p>
        You're <?php echo $_POST["age"]; ?> years old.
        In five years you will be <?php echo $futureAge = $_POST["age"] + 5; ?> years old.
    </p>
</body>
</html>