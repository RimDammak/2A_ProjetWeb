function test() {
    var errors = "<ul>";
    var date = document.querySelector('#date').value;
    var libelle = document.querySelector('#libelle').value;
    

    if (libelle.charAt(0) < 'A' || libelle.charAt(0) > 'Z') {
      
        errors += "<li>Le libelle doit commencer par une lettre Majuscule </li>";
    }
    
    if (date === "") {
        errors += "<li>La date est obligatoire </li>";
    }
    else {
        var today = new Date();
        dateeve = new Date(dateeve);
        if (today.getFullYear() - dateeve.getFullYear() < 0) {
            errors += "<li>date déja passée </li>";
        }
    }

    

  

   

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
       
        alert("evenement ajoutéé avec succées");
    }


}