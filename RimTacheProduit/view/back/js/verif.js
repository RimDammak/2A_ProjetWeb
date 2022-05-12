function verif(){
    var type = document.forms["f]["typeR"].value ;

    if(type == ""){
        alert("Ecrivez type de reclamation !!");
        return false;
    }
}