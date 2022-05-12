function verifReservation() {

    var errors = "<ul>";
    var nb_perso = document.querySelector('#nb_perso').value;
    var date = document.querySelector('#date').value;
    
    var local = document.querySelector('#local').value;
   

    
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
    
    
    if (local === 'select') {
        errors += "<li>Le local doit être saisi </li>";
    }
    if (nb_perso >10) {
        errors += "<li>Le nombre des personnes ne doit pas passé les 10 personnes </li>";
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