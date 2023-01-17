<!-- Créez un <article> ayant comme id “citation” et contenant le texte suivant :
"La vie a beaucoup plus d’imagination que nous”.
Créez un <button> ayant comme id “button”. Lorsque l’on clique sur le bouton,
récupérez le contenu de l’élément ayant comme id “citation” et affichez le contenu dans
la console de développement.
La fonction de récupération et d’affichage doit se nommer “citation()”. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="script.js"></script>
    <title>Job03</title>
</head>
<body>
    <main class="container">
        <button id="button" class="btn btn-primary" type="submit">andOne</button>
        <button type="reset"class="btn btn-danger" id="reset">Reset</button>
        <p id="compteur">0</p>
    </main>
</body>
</html>