<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Welcome to GenyPHP!</h1>
    <p><?php echo htmlspecialchars($title); ?></p>
</body>
</html>
