$(document).ready(function () {

    let form;
    let confirmeInfo = "";
    $("#titre").attr("required", true);
    $("#code").attr("required", true);
    $("#genre").attr("required", true);
    $("#photo").attr("required", true);

    $(".ajout_album").submit(function (event) {
        event.preventDefault();
        form = $(this);

        let erreurs = [];

        /***************TITRE*****************/
        let titre = $("#titre").val();
        let titreValide = /^[\p{L}\p{M}\w]+$/u;
        if (titre === "") {
            erreurs.push("Le champ titre est obligatoire");
        } else if (!titreValide.test(titre)) {
            erreurs.push("TITRE: un ou plusieurs caracteres du titre ne sont pas autorises");
        }

        /*************CODE******************/
        let code = form.find("#code").val();
        let codeValide = /^[A-Z]{3}[0-9]{4}$/
        if (code === "") {
            erreurs.push("CODE: Le champ code est obligatoire");
        } else if (!codeValide.test(code)) {
            erreurs.push("CODE: Le format de code est erroné.");
        }

        /******************DATE******************/
        let dateSaisie = new Date(form.find("#publication").val());
        let dateDefault = new Date();
        dateDefault.setDate(dateDefault.getDate() - 1);
        if (!dateSaisie) {
            dateSaisie = new Date(dateDefault).toISOString().substring(0, 10);
        }
        else {
            dateSaisie = new Date(dateSaisie);
            if (isNaN(dateSaisie)) {
                dateSaisie = dateDefault;
            }
        }
        let dateSaisieEnMilliSecondes = new Date(dateSaisie).getTime();
        let jourCourantEnMilliSecondes = new Date().getTime();
        if (jourCourantEnMilliSecondes - dateSaisieEnMilliSecondes < 0) {
            erreurs.push("DATE: Vous ne pouvez pas selectionner une date ulterieure a la date du jour");
        }

        /*********************PHOTO********************/
        let photo = form.find("#photo").val();
        let formatPhotoValide = /\.(jpeg|jpg|png)$/i;
        if (!formatPhotoValide.test((photo))) {
            erreurs.push("PHOTO: inserer un fichier jpg, jpeg ou png");
        }

        /**********************CONFIRMATION****************/
        let mois = (dateSaisie.getMonth() + 1).toString().padStart(2, "0");
        let jour = (dateSaisie.getDate() + 1).toString().padStart(2, "0");
        confirmeInfo = "Veuillez confirmer les informations de l'album: \nTitre:  " + titre +
            "\nCode:  " + code +
            "\nDate de publication:  " + dateSaisie.getFullYear() + "-" + mois + "-" + jour +
            "\nGenre:  " + form.find("#genre").val() +
            "\nPhoto:  " + photo;
        let affiche = $("#affichage")
        console.log(erreurs.length);
        if (erreurs.length > 0) {
            $("#affichage").empty();
            $("#affichage_erreur").empty();
            for (let i = 0; i < erreurs.length; i++) {
                affiche.append("<li><em>" + erreurs[i] + "</em></li>");
            }
            $("#affichage_erreur").append("<div><strong>Veuillez corriger les erreurs avant d'enregistrer</strong></div>");
            $("#affichage_erreur").append(affiche);
        } else if (confirm(confirmeInfo)) {
            $("#affichage_erreur").empty();
            $("#affichage").empty();
            form.unbind('submit').submit();
            confirmeInfo;
            erreurs.splice(0, erreurs.length);

        }
    });

    confirmeInfo;
});

