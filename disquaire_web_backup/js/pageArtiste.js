function AjouterVilles() {
    for (let i = 0; i < optionsVilles.length; i++) {
        let option = document.createElement("option");
        option.value = optionsVilles[i + 1];
        option.text = optionsVilles[i];
        ville.add(option);
    }
}

window.onload = function () {
    AjouterVilles();
}

let nom = document.getElementById("nomArtiste");
let ville = document.getElementById("villeArtiste");
let optionsVilles = ["Québec", "Montréal", "Paris", "Londres"];

function InputRequired() {
    let valide = 0;
    let imageArtiste = document.getElementById("imageArtiste");
    let textInput = document.getElementById("nomArtiste");
    let nomArtiste = textInput.value;
    imageArtiste.required = true;
    textInput.required = true;
    if (nomArtiste === "") {
        let spanNom = document.getElementById("nom-invalid");
        spanNom.innerHTML = "Le nom de l'artiste est requis!";
        valide = 1;
    }
    else if(/^[ \t\r\n\d.+/\\_"-<>*&?$#@!%]*$/.test(textInput.value)){
        let spanNom = document.getElementById("nom-invalid");
        spanNom.innerHTML = "Le nom ne peut contenir que des lettres!";
        valide = 1;
    }
    
    if (imageArtiste.files.length === 0) {
        let spanImg = document.getElementById("image-invalid");
        spanImg.innerHTML = "Veuillez sélectionner une image!";
        valide = 1;
    }
    
    if (valide == 1){
        return false;
    }
    console.log("POST!");
    return true;
}

function ClearIfNotEmpty(){
    let imageArtiste = document.getElementById("imageArtiste");
    let textInput = document.getElementById("nomArtiste");
    if (imageArtiste.files.length > 0){
        let spanImg = document.getElementById("image-invalid");
        spanImg.innerHTML = "";
    }
    if (textInput.value != ""){
        let spanNom = document.getElementById("nom-invalid");
        spanNom.innerHTML = "";
    }
}

function SoumettreArtiste(event){
    event.preventDefault();
    InputRequired();
}