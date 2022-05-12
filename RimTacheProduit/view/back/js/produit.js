function verifProduit() {

    var errors = "<ul>";
    var nb_calories = document.querySelector('#nb_calories').value;
    var libelle = document.querySelector('#libelle').value;
    var prix = document.querySelector('#prix').value;
    var description = document.querySelector('#description').value;
    var categorie = document.querySelector('#categorie').value;
    var fournisseur = document.querySelector('#fournisseur').value;
  

    if (libelle.charAt(0) < 'A' || libelle.charAt(0) > 'Z') {
        
        errors += "<li>Le libelle doit commencer par une lettre Majuscule </li>";
    }
    if (description.charAt(0) < 'A' || description.charAt(0) > 'Z') {
        
        errors += "<li>La description doit commencer par une lettre Majuscule </li>";
    }
   
    

    if(nb_calories < 0)
    {
        errors += "<li>Le nombre des calories ne doit pas être négatif </li>";
    }

    if(prix < 0)
    {
        errors += "<li>Le prix ne doit pas être négatif </li>";
    }

    if(categorie === "select")
    {
        errors += "<li>La categorie ne doit pas être vide </li>";
    }
    if(fournisseur === "select")
    {
        errors += "<li>Le fournisseur ne doit pas etre vide </li>";
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