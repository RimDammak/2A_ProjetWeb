function verifLocal() {

    var errors = "<ul>";
    var libelle = document.querySelector('#libelle').value;
    var nbTables = document.querySelector('#nbTables').value;
    var nbChaises = document.querySelector('#nbChaises').value;
    var surface = document.querySelector('#surface').value;
    var dateCreation = document.querySelector('#dateCreation').value;
  

    if (libelle.charAt(0) < 'A' || libelle.charAt(0) > 'Z') {
        
        errors += "<li>Le libelle doit commencer par une lettre Majuscule </li>";
        document.querySelector('#libelle').style.border = "thick solid #FF0000";
        //document.getElementById('libelle').focus();
    }
    else{
        document.querySelector('#libelle').style.border = "thick solid #008000";
    }
   
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

    if(nbTables < 0)
    {
        errors += "<li>Le nombre de tables ne doit pas être négatif </li>";
        document.querySelector('#nbTables').style.border = "thick solid #FF0000";
    }
    else{
        document.querySelector('#nbTables').style.border = "thick solid #008000";
    }

    if(nbChaises < 0)
    {
        errors += "<li>Le nombre de chaises ne doit pas être négatif </li>";
        document.querySelector('#nbChaises').style.border = "thick solid #FF0000";
    }else{
        document.querySelector('#nbChaises').style.border = "thick solid #008000";
    }

    if(surface < 100)
    {
        errors += "<li>La surface ne doit pas être inférieure à 100m² </li>";
        document.querySelector('#surface').style.border = "thick solid #FF0000";
    }else{
        document.querySelector('#surface').style.border = "thick solid #008000";
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

