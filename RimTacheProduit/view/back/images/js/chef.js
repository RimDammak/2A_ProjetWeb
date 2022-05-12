function verifChef() {

    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;
    var prenom = document.querySelector('#prenom').value;
    var categorie = document.querySelector('#categorie').value;
    var local = document.querySelector('#local').value;
    var dateNais = document.querySelector('#dateNais').value;
   
  

    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
        
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }
    if (prenom.charAt(0) < 'A' || prenom.charAt(0) > 'Z') {
        
        errors += "<li>Le prenom doit commencer par une lettre Majuscule </li>";
    }
    if (dateNais === "") {
        errors += "<li>La date est obligatoire </li>";
    }
    else {
        var today = new Date();
        dateNais = new Date(dateNais);
        if (today.getFullYear() - dateNais.getFullYear() < 18) {
            errors += "<li>Le chef doit avoir plus de 18 ans  </li>";
        }
    }

   if(categorie === "select")
   {
    errors += "<li>La catégorie est obligatoire </li>";
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