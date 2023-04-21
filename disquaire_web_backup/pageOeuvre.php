<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="js/pageOeuvre.js"></script>
    <link href="css/oeuvre.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Page Oeuvre</title>
</head>
<body style="background-image: url('img/rock_oeuvre.jpg');">
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


  <main class="p-5 sizing" >
        <div class="container-fluid p-2" style="background-color:rgb(0, 0, 0, 0.8); border-radius: 10px;" >
            <form action="submit" onsubmit="return formValidation(event)" method="post">
                <h2 style="color: #ffffff">Ajouter oeuvre</h2>
                <div class="row">
                    <div class="col-md-6">
                        <label id="oeuvreNameLabel" style="color: #ffffff;" for="oeuvreName">Nom de l'oeuvre</label>
                        <span id="oeuvre-invalide" style="color:crimson"></span>
                        <input type="text"  class="form-control" id="oeuvreName" name="oeuvreName" required>
                    </div>
                      
                    <div class="col-md-6 ">
                        <label for="artistName" style="color: #ffffff;">Artiste Principal</label>
                        <span id="artist-invalide" style="color:crimson"></span>
                        <input type="text"  class="form-control" id="artistName"  name="artistName" required>
                        
                    </div>
                </div>
                

                 
                <div class="row">
                    <div class="col-md-4 ">
                        <label for="roleArtist" style="color: #ffffff;">Role artiste</label>
                        <select class="form-control" id="roleArtist" name="roleArtist" >
                            <option>Chanteur</option>
                            <option>compositeur</option>
                            <option>interprete</option>
                            <option>auteur</option>                        
                        </select>                             
                    </div>

                    <div class="col-md-4 ">
                        <label for="dureSecond" style="color: #ffffff;">Duree (S)</label>
                        <span id="dure-invalide" style="color: crimson"></span>
                        <input type="number" class="form-control" id="dureSecond"  name="dureSecond" min="1" required>    
                    </div>

                    <div class="col-md-4 ">
                        <label for="tailleMB" style="color: #ffffff;">Taille (MB)</label>
                        <input type="number" step=".01" min="0.01" class="form-control" id="tailleMB" name="tailleMB">
                    </div>  
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="lyrics" style="color: #ffffff;">lyrics</label>
                        <textarea class="form-control" name="lyrics" id="lyrics" ></textarea>
                    </div>
                </div>

                <div class="row p-3">
                    <div class="col-md-4">
                        <label for="date" style="color: #ffffff;">Date </label>
                        <input class="form-control" type="text" id="date" name="date" disabled required>
                    </div>

                    <div class="col-md-4">
                        <label for="codeAlbum" style="color: #ffffff;">Code : (XXX0000)</label>
                        <input type="text" pattern="[A-Z]{3}[0-9]{4}"  class="form-control" id="codeAlbum" name="codeAlbum"required>
                    </div>

                    <div class="col-md-4">
                        <label for="Prix" style="color: #ffffff;">Prix</label>
                        <input type="number" step=".01" class="form-control" id="prix" name="prix" required>
                    </div>                   
                </div>
                <button type="submit" class="btn btn-primary m-4" value="submit">submit</button>                                    
            </form>
        </div>
    </main>  
</body>
</html>