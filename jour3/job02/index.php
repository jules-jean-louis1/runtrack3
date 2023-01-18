<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>Jour03</title>
</head>
<body>
    <button id="button">
        Mélanger
    </button>
    <div id="melangees">
        <?php foreach (range(1, 6) as $i) : ?>
            <img id="<?= $i ?>" src="src/arc<?= $i ?>.png" alt="images_rainbow">
        <?php endforeach; ?>
    </div>
    <div id="rangees">
    </div>
</body>
</html>