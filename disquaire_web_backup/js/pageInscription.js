$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();
        $("#userNom").prop("required", true);
        $("#userEmail").prop("required", true);
        $("#userPass").prop("required", true);

        let userEmail = $("#userEmail").val();
        if (!/^[\da-zA-Z]{1}[a-zA-Z\d_+~.-]+[@]{1}[a-zA-Z\d.-]+[.]{1}[a-zA-Z]{2,}$/i.test(userEmail)){
            let spanEmail = $("#email-invalid");
            spanEmail.html("courriel doit respecter le format email@email.com");
        }
        ValiderEmail();
        console.log("POST!");
    });


    function ValiderEmail(){
        let userPass = $("#userPass").val();
        if (!/^(?=.*\d)[\w!@#$%^&*()\-+={}\[\]|\\:;"'<>,.?\/]{7,}$/.test(userPass)){
            let spanPass = $("#pass-invalid");
            spanPass.html("Mot de passe doit contenir au minimum 8 caractères et respecter le bon format" + 
                        "<br>Minimum 8 caractères, 1 minuscule, 1 majuscule, 1 caractère spécial, 1 chiffre");
        };
    };

});

function PasswordMatch(){
    let userPass = $("#userPass").val();
    let confirmPass = $("#confirmPass").val();
    if (userPass != confirmPass){
        let spanCPass = $("#confirmpass-invalid");
        spanCPass.html("Les deux mot de passe doivent correspondre.");
    } else {
        let spanCPass = $("#confirmpass-invalid");
        spanCPass.html("");
    }
};