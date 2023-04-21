
function acheter(){
    // gestion des articles
    let articleSelectionner = document.getElementById("chOeuvre").value;
    let listArticle = ["It's All Coming Back to Me Now" , "Because You Loved Me" , "Le droit des femmes" , "Be With You" , "One World, One Flame" , "Catching Feelings" , "Je n'ai pas changé" , "Dur comme fer" , "Le Pays d'à côté" ,"Dans chaque cœur"];
         if(articleSelectionner === "Choix de l'article")
         {return; }
    let liItem = document.createElement("li");
    let luPanier = document.getElementById("articlePanier");
    luPanier.appendChild(liItem);
    liItem.innerHTML = listArticle[articleSelectionner];

    // gestion des quantites
    let quantiteSelectionner = document.getElementById("quantiteOeuvre").value;
    let liQuantite = document.createElement("li");
    let luQuantite = document.getElementById("quantitePanier");
    liQuantite.innerHTML = quantiteSelectionner;
    luQuantite.appendChild(liQuantite);

    // prix
    let listDePrix = [2.99 , 1.99 , 1.99 , 0.99 , 0.99 , 1.74 , 2.11 , 2.15 , 1.11 , 1.69];
    let liPrix = document.createElement("li");
    let luPrix = document.getElementById("prix");
    luPrix.appendChild(liPrix);
    liPrix.innerHTML = listDePrix[articleSelectionner];

    // total panier
    let soustotalPanier = parseFloat(document.getElementById("totalPanier").value); 
    let total = soustotalPanier + (listDePrix[articleSelectionner]*quantiteSelectionner);
    total.toFixed(2);
    document.getElementById("totalPanier").value = total;
    


    //rabais
    
    if(total >= 50 && total < 100)
    {
        document.getElementById("rabais").value = "10%";
    
    }
    if(total >= 100)
    {
        document.getElementById("rabais").value = "20%";
       
    }


    //prix reduit

    if(total < 50)
    {
        document.getElementById("prixRabais").value = total.toFixed(2);
    }

    if(total >= 50 && total < 100)
    {
        document.getElementById("prixRabais").value = (total/1.1).toFixed(2);
    }

    if(total >= 100)
    {
        document.getElementById("prixRabais").value= (total/1.2).toFixed(2);   
    }

    


    


}