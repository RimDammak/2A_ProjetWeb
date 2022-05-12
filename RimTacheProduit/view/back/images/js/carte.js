function verifCarteAdd() {

    var errors = "<ul>";
   
    var dateCreation = document.querySelector('#dateCreation').value;
   

  
   
    if (dateCreation === "") {
        errors += "<li>La date est obligatoire </li>";
        document.querySelector('#dateCreation').style.border = "thick solid #FF0000";
    }
    else {
        var today = new Date();
        dateCreation = new Date(dateCreation);
        if (today.getFullYear() - dateCreation.getFullYear() < 0) {
            errors += "<li>La date est erronée </li>";
            document.querySelector('#dateCreation').style.border = "thick solid #FF0000";
        }
        else{
            document.querySelector('#dateCreation').style.border = "thick solid #008000";
        }
    }

   

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
       // var msg = "Saisie effectuée avec succès";
      //  alert(msg);
      return true;
    }


}

function verifCarteUpdate() {

    var errors = "<ul>";
 
    var statut= document.querySelector('#statut').value;
    var points= document.querySelector('#points').value;

    if (statut === 'select') {
        errors += "<li>Veuillez indiquer l'état de la carte </li>";
        document.querySelector('#statut').style.border = "thick solid #FF0000";
    }
    else
    {
        document.querySelector('#statut').style.border = "thick solid #008000";
    }
    if (points == 0) {
        errors += "<li>Veuillez indiquer les points de fidélité </li>";
        document.querySelector('#points').style.border = "thick solid #FF0000";
    }
    else
    {
        document.querySelector('#points').style.border = "thick solid #008000";
    }
    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
      //  var msg = "Saisie effectuée avec succès";
        alert(msg);
    }


}
