function resetform(event) {
    let message_formulaire_false = document.getElementById("message_non_valide");
    if (passwordsame() == true) {
        document.getElementById("formulaire").reset();
    } else {
        message_formulaire_false.innerHTML = "Vous avez mal informé les informations dans le formulaire !";
        event.preventDefault();
    }
}

function passwordsame() {
    let mdp = document.getElementById("mdp").value;
    let confirmmdp = document.getElementById("confirmmdp").value;
    let message = document.getElementById("passwordmessage");
    if (mdp != "" || confirmmdp != "") {
        if (mdp == confirmmdp) {
            message.innerHTML = "correct";
            return true;
        } else {
            message.innerHTML = "Mot de passe différent";
            return false;
        }
    }
    return false;
}