<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="js/pageCommander.js"></script>
    <link href="css/commande.css" type="text/css" rel="stylesheet" />
    <script defer src="js/pageCommander.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Page Commander</title>
</head>
<body style="background-image: url(img/commander_background.jpg);">
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
            <form action="submit" method="post">
                <h2 style="color: #ffffff">Commander</h2>
                <div class="row">
                    <div class="col-md-7 m-3">
                        <label for="chOeuvre" style="color: #ffffff;">Selectionner une Oeuvre</label>
                        <select name="chOeuvre" id="chOeuvre" class="form-control"  required>
                            <option selected disabled hidden>Choix de l'article</option>
                            <option value="0">It's All Coming Back to Me Now</option>
                            <option value="1">Because You Loved Me</option>
                            <option value="2">Le droit des femmes</option>
                            <option value="3">Be With You</option>
                            <option value="4">One World, One Flame</option>
                            <option value="5">Catching Feelings</option>
                            <option value="6">Je n'ai pas changé</option>
                            <option value="7">Dur comme fer</option>
                            <option value="8">Le Pays d'à côté</option>
                            <option value="9">Dans chaque cœur</option>
                         </select>                
                    </div>
                    <div class="col-md-2 p-3">
                        <label for="quantiteOeuvre" style="color: #ffffff;">Quantite</label>
                        <select name="quantiteOeuvre" id="quantiteOeuvre" class="form-control" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div id="manuel" class="col-md-2">
                    <button type="button" value="Ajouter" id="ajouter" onclick="acheter()" >Ajouter</button>
                    </div>
                  
                </div>
                <div class="row">
                     <div class="col-md-5" style="color:#ffffff">Oeuvre(s) dans votre panier : 
                        <ul id="articlePanier">
                       
                   
                        </ul>

                    </div>
                    <div class="col-md-2" style="color: #ffffff;">Quantite :
                       <ul id="quantitePanier">
                    
                       </ul>
                    </div> 

                    <div class="col-md-3" style="color: #ffffff;">Prix (unitaire) :
                        <ul id="prix">
                     
                        </ul>
                     </div> 
                </div>

                <div class="row">
                    <div class="col-md-3 m-4" style="color:#ffffff">Total du panier : 
                        <input type="number" step=".01" value="0"  class="form-control" id="totalPanier" disabled>
                    </div>
                    <div class="col-md-3 m-4"  style="color:#ffffff">Rabais obtenue : 
                        <input type="text" value="0" class="form-control" id="rabais" disabled>
                    </div>

                    <div class="col-md-3 m-4" style="color: #ffffff">Total Reduit :
                        <input type="number" value="0" step=".01" class="form-control" id="prixRabais" disabled>
                    
                    </div>
                </div>
                

                

                <button type="submit" value="submit" class="btn btn-primary m-4">Acheter</button>
            </form>
         </div>
    </main>


    
    
</body>
</html>