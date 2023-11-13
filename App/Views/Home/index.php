<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
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
    <p><?=$title?></p>
    <form action="<?=APP_ROOT?>/create" method='post'>
    <div><input type="text" name='firstName' value="<?=$firstName??''?>"/></div>
        <button>Submit</button>
    </form>
    <?= $firstName??'' ?>
</body>
</html>
