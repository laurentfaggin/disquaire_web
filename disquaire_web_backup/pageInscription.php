<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/inscription.css">
        <script defer src="js/pageInscription.js"></script>
        <title>Page Inscription</title>
    </head>
    
    
    <body style=" background-image: url(img/inscription.jpg)">
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
            <div class="container p-2" style="background-color: rgba(0,0,0,0.8); border-radius: 35px; color:aliceblue">
                <form action="submit" method="post" enctype="multipart/form-data" id="addUser">
                    <h1 style="color:whitesmoke; border-radius: 35px; text-align: center;">Inscription</h1>
                    <div class="row p-2">
                        <div class="col p-2">
                            <label for="userNom" class="form-label">Nom d'usager: </label>
                            <input type="text" class="form-control" name="userNom" id="userNom" placeholder="Nom d'usager">
                            <span class="bg-danger text-white" id="user-invalid">
    
                            </span>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col p-2">
                            <label for="userEmail" class="form-label">E-Mail: </label>
                            <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="email@email.com">
                            <span class="bg-danger text-white" id="email-invalid">
    
                            </span>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-6 p-2">
                            <label for="userPass" class="form-label">Mot de passe: </label>
                            <input type="password" class="form-control" name="userPass" id="userPass" placeholder="Mot de passe">
                            <span class="bg-danger text-white" id="pass-invalid">
    
                            </span>
                        </div>
                        <div class="col-6 p-2">
                            <label for="confirmPass" class="form-label">Confirmation de mot de passe: </label>
                            <input type="password" class="form-control" name="confirmPass" id="confirmPass" 
                            placeholder="Confirmation de mot de passe" oninput="PasswordMatch()">
                            <span class="bg-danger text-white" id="confirmpass-invalid">
    
                            </span>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col p-2">
                            <label for="userAge" class="form-label">Âge</label>
                            <input type="number" class="form-control" id="userAge" name="userAge" min="18" max="100" placeholder="Minimum de 18 âns requis">
                            <span class="bg-danger text-white" id="age-invalid">
    
                            </span>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col p-2 d-flex justify-content-center">
                            <input type="submit" value="Inscrirption" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>

</html>