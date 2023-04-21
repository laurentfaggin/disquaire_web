//date du jours
document.getElementById("date").value = new 
Date().toLocaleDateString(); 

function formValidation(event){
    event.preventDefault();
    let nomOeuvre = document.getElementById("oeuvreName").value;
    let nomArtiste = document.getElementById("artistName").value;
    let valide = 0;
    if(/^[ \t\r\n]*$/.test(nomOeuvre))
    {
        let erreur = document.getElementById("oeuvre-invalide");
        erreur.innerHTML = "Champs Vide ";
        valide=1;
    }
    if(/^[ \t\r\n]*$/.test(nomArtiste))
    {
        let erreur = document.getElementById("artist-invalide");
        erreur.innerHTML = " Champs Vide";
        valide = 1;
    }

   
    if(valide == 1)
    {
        return false;
    }

    return true;
    



}