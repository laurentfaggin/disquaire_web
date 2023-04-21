<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="js/pageListeAlbums.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Page Liste Albums</title>
</head>

<body style="background-image:url('img/records-gdc1c089b2_1920.jpg')">
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
    <main>
        <form action="" method="get">
            <div class="container border-color:black" style=" background-color: rgba(0,0,0,0.5); border-radius: 55px">
                <div class="row p-5" style="text-align:center; color:white;">
                    <h2>Liste de tous nos albums</h2>
                </div>
                <div class="row" style="align-items:end; text-align:center; color:white; " id="album"></div>
            </div>
        </form>
    </main>
</body>

</html>