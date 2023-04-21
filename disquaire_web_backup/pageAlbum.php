<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/album.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="js/pageAlbum.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Page Album</title>
</head>

<body style="background-image: url('img/records-gdc1c089b2_1920.jpg'); background-size: cover;">
    <header>
    <ul class="nav justify-content-center" style="background-color: rgba(0,0,0,1);">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Acceuil</a>
            </li>
            <li class="nav-item">
                <a href="pageAlbum.php" class="nav-link">Ajouter Album</a>
            </li>
            <li class="nav-item">
                <a href="pageArtiste.php" class="nav-link">Ajouter Artiste</a>
            </li>
            <li class="nav-item">
                <a href="pageCommander.php" class="nav-link">Commander</a>
            </li>
            <li class="nav-item">
                <a href="pageInscription.php" class="nav-link">Inscription</a>
            </li>
            <li class="nav-item">
                <a href="pageListeAlbums.php" class="nav-link">Liste Albums</a>
            </li>
            <li class="nav-item">
                <a href="pageOeuvre.php" class="nav-link">Oeuvres</a>
            </li>
        </ul> 
    </header>
    <form class="ajout_album" action="recuperation_formulaire_album" method="post" enctype="multipart/form-data">
        <div class="container p-3" style="background-color: rgba(0,0,0,0.6); border-radius: 35px">
            <h1 style="color:whitesmoke; border-radius: 35px">Ajouter un nouvel album</h1>
            <div class="row">
                <div id="affichage_erreur" style="color:white">
                    <ul id="affichage"></ul>
                </div>
                <div class="col-12 p-2">
                    <label for="titre" style="color:white"><em style="color:red">*</em>Titre</label>
                    <input for="titre" id="titre" placeholder="Entrez le titre de l'album" type="text"
                        class="text form-control" style="border-radius: 35px">
                </div>

                <div class="col-12 p-2">
                    <label for="code" style="color:white"><em style="color:red">*</em>Code</label>
                    <input for="code" id="code" placeholder="AAA1111" type="text" class="text form-control"
                        style="border-radius: 35px">

                </div>

                <div class="col-12 p-2">
                    <label for="date" style="color:white">Date de publication</label><span id="erreur_date"
                        class="erreur"></span>
                    <input type="date" id="publication" name="date" id="date" class="form-control">
                </div>

                <div class="col-12 p-2">
                    <label for="genre" style="color:white"><em style="color:red">*</em>Genre</label>
                    <select id="genre" class="form-control" style="border-radius: 35px">
                        <option value="" disabled selected hidden>Veuillez choisir un style</option>
                        <option value="blues">Blues</option>
                        <option value="classique">Classique</option>
                        <option value="country">Country</option>
                        <option value="folk">Folk</option>
                        <option value="jazz">Jazz</option>
                        <option value="rap">Rap</option>
                        <option value="rock">Rock</option>
                        <option value="techno">Techno</option>
                    </select>
                </div>

                <div class="col-12 p-2">
                    <label for="photo" style="color:white"><em style="color:red">*</em>Photo de couverture:</label>
                    <input class="form-control" type="file" id="photo" name="photo" style="border-radius: 35px"
                        accept="img/png, img/jpeg, img/jpg">
                </div>

                <div class="col-3 pt-4 pb-3">
                    <button type="submit" id="submit" style="border-radius: 35px">Enregistrer</button>
                </div>
            </div>
        </div>
    </form>

    
</body>
</html>


