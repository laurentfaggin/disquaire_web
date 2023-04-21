<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pageArtiste.css">
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
        crossorigin="anonymous">
    <script defer src="js/pageArtiste.js"></script>
    <title>Page Artiste</title>
</head>

<body style="background-image: url(img/artistes.jpg); background-size: cover;">
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
        <div class="container p-2"  style="background-color: rgba(0,0,0,0.8); border-radius: 35px; color:aliceblue" >
            <form action="submit" method="post" enctype="multipart/form-data" id="addArtiste" onsubmit="return SoumettreArtiste(event)">
                <h1 style="color:whitesmoke; border-radius: 35px; text-align: center;">Ajouter un artiste</h1>
                <div class="col p-2">
                    <label for="nomArtiste" class="form-label">Nom: </label>
                    <input type="text" class="form-control" name="nom" id="nomArtiste" placeholder="Nom" onchange="ClearIfnotEmpty()">
                    <span id="nom-invalid" class="bg-danger text-white">
    
                    </span>
                </div>
    
                <div class="col p-2">
                    <label for="villeArtiste" class="form-label">Ville de l'artiste: </label>
                    <select id="villeArtiste" class="form-select" name="villeArtiste">
                        <option value="0">Selectionnez une ville</option>
                    </select>
                </div>
    
                <div class="col p-2">
                    <label for="imageArtiste" class="form-label">Selectionnez une image: </label>
                    <input type="file" id="imageArtiste" class="form-control" name="imageArtiste" onchange="ClearIfNotEmpty()">
                    <span class="bg-danger text-white" id="image-invalid">
    
                    </span>
                </div>
    
                <div class="col p-2  d-flex justify-content-center">
                    <input type="submit" value="Soumettre" class="btn btn-primary">
                </div>
            </form>
        </div>
    </main>
</body>

</html>