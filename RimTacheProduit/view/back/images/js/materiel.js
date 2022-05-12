function verifMateriel() {

    var errors = "<ul>";
    var libelle = document.querySelector('#libelle').value;
    var dateAchat = document.querySelector('#date_achat').value;
    var local = document.querySelector('#local').value;
    var nbPieces = document.querySelector('#nbPieces').value;
   
  

    if (libelle.charAt(0) < 'A' || libelle.charAt(0) > 'Z') {
        
        errors += "<li>Le libelle doit commencer par une lettre Majuscule </li>";
    }
    if (dateAchat === "") {
        errors += "<li>La date est obligatoire </li>";
    }
    else {
        var today = new Date();
        dateAchat = new Date(dateAchat);
        if (today.getFullYear() - dateAchat.getFullYear() < 0) {
            errors += "<li>La date est erronée  </li>";
        }
    }
    if (nbPieces < 0) {
        errors += "<li>Le nombre des pieces ne doit pas être négatifs</li>";
    }
   if(local === "select")
   {
    errors += "<li>Le local est obligatoire </li>";
   }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
       return false;
       
    } else {
      //  var msg = "Saisie effectuée avec succès";
      //  alert(msg);
        return true;
    }


}