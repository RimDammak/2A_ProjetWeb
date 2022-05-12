


function verifFournisseur() {

    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;
    var prenom = document.querySelector('#prenom').value;
    var categorie = document.querySelector('#categorie').value;
    var local = document.querySelector('#local').value;
   

    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
        
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
        document.querySelector('#nom').style.border = "thick solid #FF0000";
    }
    else{
        document.querySelector('#nom').style.border = "thick solid #008000";
    }
    if (prenom.charAt(0) < 'A' || prenom.charAt(0) > 'Z') {
        errors += "<li>Le prenom doit commencer par une lettre Majuscule </li>";
        document.querySelector('#prenom').style.border = "thick solid #FF0000";
    }
    else{
        document.querySelector('#prenom').style.border = "thick solid #008000";
    }
    if (categorie === 'select') {
        errors += "<li>La catégorie doit être saisie  </li>";
        document.querySelector('#categorie').style.border = "thick solid #FF0000";
    }
    else{
        document.querySelector('#categorie').style.border = "thick solid #008000";
    }
    if (local === 'select') {
        errors += "<li>Le local doit être saisi </li>";
        document.querySelector('#local').style.border = "thick solid #FF0000";
    }else{
        document.querySelector('#local').style.border = "thick solid #008000";
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
      //  var msg = "Saisie effectuée avec succès";
        //alert(msg);
        return true;
    }
}