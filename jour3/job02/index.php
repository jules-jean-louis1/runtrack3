<!-- Le but de ce job sera dans un premier temps de créer une balise <button>. Cette balise
servira à mélanger l’ensemble des images de l’arc-en-ciel.
Par la suite, vous devrez faire en sorte qu’il soit possible de remettre les images dans le
bon ordre, en utilisant un ou plusieurs conteneurs.
Une fois que les 6 images sont ordonnées, un message s’affiche en dessous :
Si l'arc-en-ciel est bien reconstitué, le message “Vous avez gagné” s’affiche en vert.
Sinon, le message “Vous avez perdu” s’affiche en rouge. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>Jour03</title>
</head>
<body>
    <button id="button" class="btn btn-outline-success">
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