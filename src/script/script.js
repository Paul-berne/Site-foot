function checked_form(event) {
    let message_formulaire_false = document.getElementById("message_non_valide");
    if (same_password() && validate() && before_submit()) {
        var f = document.getElementById("formulaire");
        f.submit(); 
       
    }else{
        message_formulaire_false.innerHTML = "Vous avez mal informé les informations dans le formulaire !";
        event.preventDefault();
    }
}

function validate() { 
    let msg; 
    let str = document.getElementById("mdp").value; 

    if (str.match( /[0-9]/g) && 
            str.match( /[A-Z]/g) && 
            str.match(/[a-z]/g) && 
            str.match( /[^a-zA-Z\d]/g) &&
            str.length >= 12) {
        msg = "<p style='color:green'>Mot de passe fort.</p>"; 
    }else{ 
        msg = "<p style='color:red'>Mot de passe faible.</p>"; 
        }
    document.getElementById("message_conforme").innerHTML= msg; 
    if (msg === "<p style='color:green'>Mot de passe fort.</p>"){
        return true;
    }else {
        return false;
    }
} 

function same_password(){
    let mdp = document.getElementById("mdp").value;
    let confirmmdp = document.getElementById("confirmmdp").value;
    let message = document.getElementById("passwordmessage");
    let invalide_message = document.getElementById("message_invalide");

    if (mdp.trim() !== "" && confirmmdp.trim() !== "") {
        if (mdp === confirmmdp) {
            message.innerHTML = "correct";
            invalide_message.innerHTML = "";
            return true;
        } else {
            invalide_message.innerHTML = "Mot de passe différent";
            message.innerHTML = "";
            return false;
        }
    } else {
        invalide_message.innerHTML = "";
        message.innerHTML = "";
        return false;
    }
}

function before_submit(){
    let nom = document.getElementById("nom").value;
    let prenom = document.getElementById("prenom").value;
    let mail = document.getElementById("mail").value;
    let sexe = document.getElementById("sexe").value;
    let club_pref = document.getElementById("club_pref").value;
    let ligue = document.getElementById("championnat").value;
    
    if(nom.trim() !== "" && prenom.trim() !== "" && sexe !== "" && ligue !== "" && mail.includes("@")){
        return true;
    }else{
        return false;
    }


}

// Fonction pour cocher ou décocher toutes les cases individuelles
function selectAllClubs() {
    var checkboxes = document.querySelectorAll('.select-all');
    var clubCheckboxes = document.querySelectorAll('input[name="club_news[]"]');

    for (var i = 0; i < clubCheckboxes.length; i++) {
        clubCheckboxes[i].checked = checkboxes[0].checked;
    }
}