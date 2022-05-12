function verifEvenement() {

    var errors = "<ul>";
    var libelle = document.querySelector('#libelle').value;
    var date = document.querySelector('#date').value;
    var duree = document.querySelector('#duree').value;
    var local = document.querySelector('#local').value;
   

    if (libelle.charAt(0) < 'A' || libelle.charAt(0) > 'Z') {
        
        errors += "<li>Le libelle doit commencer par une lettre Majuscule </li>";
    }
    if (date === "") {
        errors += "<li>La date est obligatoire </li>";
    }
    else {
        var today = new Date();
        date = new Date(date);
        if (today.getFullYear() - date.getFullYear() < 0) {
            errors += "<li>La date est erronée </li>";
        }
    }
    if(duree > 100)
    {
        errors += "<li>la durée ne dépasse pas 100 jours ! </li>";
    }
    
    if (local === 'select') {
        errors += "<li>Le local doit être saisi </li>";
    }
    
    
    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'black';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
      
        return true;
    }
}