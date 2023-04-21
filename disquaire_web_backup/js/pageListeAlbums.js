let affichage = document.getElementById("album");

function listeAlbum() {
    fetch("albums.json")
        .then((response) => response.json())
        .then((json) => {
            console.log(json);
            for (const albums of json.albums) {                
                let encartAlbum = document.createElement("div");
                encartAlbum.style.marginTop = "10px";
                encartAlbum.classList.add("col-12","col-sm-6","col-md-4","col-lg-3");
                let button = document.createElement("button");
                button.textContent = "Cliquez pour voir les titres";
                button.classList.add("col-12");
                button.style.backgroundColor = "darkgray"
                
                let titre = document.createElement("h2");
                titre.textContent = albums.titre;
                let photoCouverture = document.createElement("img");
                photoCouverture.src = `img/${albums.pht_couvt}`;
                photoCouverture.classList.add("img-thumbnail");
                let titres = document.createElement("ul");
                for (let oeuvre of albums.titre_oeuvre) {
                    let morceau = document.createElement("li");
                    morceau.textContent = oeuvre;
                    morceau.style.textAlign = "left";
                    morceau.classList.add("col-12");
                    titres.appendChild(morceau);
                }
                titres.style.position = "absolute";
                titres.style.display = "none";
                titres.style.backgroundColor="rgba(0,0,0,0.8)";
                titres.style.borderBottomLeftRadius = "25px";
                titres.style.borderBottomRightRadius = "25px";
                titres.style.color="white";
                
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    if (titres.style.display === "none") {
                        titres.style.display = "block";
                        titres.style.paddingBottom = "20px";
                    } else {
                        titres.style.display = "none";
                    }
                });

                button.addEventListener("mouseover", function(event){
                    event.preventDefault();
                    button.style.backgroundColor = "gray"
                })

                button.addEventListener("mouseout", function(event){
                    event.preventDefault();
                    button.style.backgroundColor = "darkGray"
                })
                encartAlbum.appendChild(titre);
                encartAlbum.appendChild(photoCouverture);
                encartAlbum.appendChild(button);
                encartAlbum.appendChild(titres);
                affichage.appendChild(encartAlbum);
            }
        })
}

window.onload = function () {
    listeAlbum();
}

