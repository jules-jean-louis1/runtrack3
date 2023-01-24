<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="flex w-full bg-blue-600 py-5 content-end justify-around">
            <ul class="navbar-nav flex ml-2 space-x-4">
                <li class="nav-link">
                    <a href="index.php" class="text-white hover:text-gray-200">Acceuil</a>
                </li>
                <li class="nav-link">
                    <a href="index.php" class="text-white hover:text-gray-200">Inscription</a>
                </li>
                <li>
                    <a href="index.php" class="text-white hover:text-gray-200">Connexion</a>
                </li>
            </ul>
            <div class="flex items-center content-end justify-end">
                <div class="relative rounded-md shadow-sm">
                <input id="search" class="form-input py-1 px-2 block w-full leading-5 rounded-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Search...">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                    </svg>
                </div>
                </div>
            </div>
        </nav>
    </header>
</body>
    <main>
        <form action="" method="post">
            <div>
                <div>
                    <input type="radio" name="" id="">
                    <label for="">Monsieur</label>
                </div>
                <div>
                    <input type="radio" name="" id="">
                    <label for="">Madame</label>
                </div>
            </div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <label for="password2">Confirmer le mot de passe</label>
            <input type="password" name="password2" id="password2">
            <fieldset>
                <label for="">Vos passions :</label>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="">Informatique</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="">Sport</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="">Lecture</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="">Voyages</label>
                </div>
            </fieldset>
            <input type="submit" value="S'inscrire">
        </form>
    </main>
    <footer class="w-full flex flex-warp items-center justify-around bg-rose-500 py-4 fixed bottom-0">
        <section>
            <nav class="flex justify-around">
                <ul class="flex justify-around">
                    <li>
                        <a href="index.php">Acceuil</a>
                    </li>
                    <li>
                        <a href="index.php">Inscription</a>
                    </li>
                    <li>
                        <a href="index.php">Connexion</a>
                    </li>
                    <li>
                        <a href="index.php">Rechercher</a>
                    </li>
                </ul>
            </nav>
        </section>
    </footer>
</html>