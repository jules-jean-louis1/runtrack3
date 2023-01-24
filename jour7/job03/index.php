<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>J07 - Job01</title>
</head>
<body>
    <header>
        <nav class="relative w-full flex flex-warp items-center justify-beteween bg-black py-2 text-orange-400">
            <ul class="navbar-nav flex flex-col pl-0 list-style-none mr-auto">
                <li class="nav-item p-2">
                    <a href="index.php" class="nav-link focus:text-orange-400 hover:text-orange-700 ease-in duration-100 text-lg font-bold">
                        Accueil
                    </a>
                    <a href="index.php" class="nav-link focus:text-orange-400 hover:text-orange-700 ease-in duration-100 text-lg font-bold">
                        Inscription
                    </a>
                    <a href="index.php" class="nav-link focus:text-orange-400 hover:text-orange-700 ease-in duration-100 text-lg font-bold">
                        Connexion
                    </a>
                </li>
            </ul>
            <div class="flex items-center justify-center">
                <div class="flex border-2 border-rose-500 rounded">
                    <input type="text" class="px-4 py-2 w-80" placeholder="Rechercher...">
                    <button class="px-4 text-rose-500 bg-white border-2">
                        Rechercher
                    </button>
                </div>
            </div>
        </div>       
    </div>
</div>
        </nav>
    </header>
    <main>
        <article class="flex">
            <section class="container mx-auto">
                <form action="" method="post" class="w-full max-w-lg">
                    <div class="flex flex-wrap-mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 mb:mb-0">
                            <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">Monsieur</label>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 mb:mb-0">
                            <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">Madame</label>
                        </div>
                    </div>
                    <div class="flex flex-warp -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Prénom
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Prénom">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Nom
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Nom">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Adresse
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="adresse">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                E-Mail
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="flex flex-warp -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                Password
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="password" placeholder="Password">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Confirmation du Password
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="password" placeholder="Password">
                        </div>
                    </div>
                    <p> Vos passion :</p>
                    <div class="flex flex-warp -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 mb:mb-0">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckIndeterminate">
                            Info.
                            </label>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 mb:mb-0">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckIndeterminate">
                            Voyages
                            </label>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 mb:mb-0">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckIndeterminate">
                            Sport
                            </label>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 mb:mb-0">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckIndeterminate">
                            Lecture
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-warp -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 mb:mb-0">
                            <button>
                                <a href="index.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                    Inscription
                                </a>
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <footer>
        <nav class="w-full flex flex-warp items-center justify-around bg-rose-500 py-4 fixed bottom-0">
            <div class="flex">
                <ul class="list-style-none">
                    <li class="nav-items mx-8">
                        <a href="index.php" class="nav-link focus:text-indigo-500 hover:text-indigo-600">
                            Accueil
                        </a>
                        <a href="index.php" class="nav-link focus:text-indigo-500 hover:text-indigo-600">
                            Inscription
                        </a>
                        <a href="index.php" class="nav-link focus:text-indigo-500 hover:text-indigo-600">
                            Connexion
                        </a>
                        <a href="index.php" class="nav-link focus:text-indigo-500 hover:text-indigo-600">
                            Rechercher
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
</body>
</html>