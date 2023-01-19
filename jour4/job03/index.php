<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- JS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>Jour04</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="d-flex flex-column">
                        <label for="id">Get ID :</label>
                        <input type="number" id="getid" class="form-control">
                        
                        <label for="nom">Get Name :</label>
                        <input type="text" id="username" class="form-control">

                        <label for="type">Type :</label>
                        <select name="type" id="type_liste" class="form-control">
                            <option value="Grass">Grass</option>
                            <option value="Poison">Poison</option>
                            <option value="Fire">Fire</option>
                            <option value="Flying">Flying</option>
                            <option value="Water">Water</option>
                            <option value="Bug">Bug</option>
                            <option value="Normal">Normal</option>
                            <option value="Electric">Electric</option>
                            <option value="Ground">Ground</option>
                            <option value="Fairy">Fairy</option>
                            <option value="Fighting">Fighting</option>
                            <option value="Psychic">Psychic</option>
                            <option value="Rock">Rock</option>
                            <option value="Steel">Steel</option>
                            <option value="Ice">Ice</option>
                            <option value="Ghost">Ghost</option>
                            <option value="Dragon">Dragon</option>
                        </select>
                        
                        <input type="submit" 
                                value="Filter" 
                                name="filter" 
                                class="btn btn-primary" 
                                id="submit"
                                style="margin-top: 10px;"
                                >
                    </div>
                </form>
            </div>
        </div>
        <div id="result">

        </div>
    </main>
</body>
</html>