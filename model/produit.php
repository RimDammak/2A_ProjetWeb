<?php
class Produit
{ 
    private string $id;
    private string $nom;
    private string $prix;
    private string $description;
public function __construct($d,$f,$t){
    $this->nom = $d;
    $this->prix = $f;
    $this->description = $t;

}
public function getid(){
    return $this->id ;
}
public function getnom(){
    return $this->nom ;
}
public function getprix(){
    return $this->prix ;
}
public function getdescription(){
    return $this->description ;
}





public function setnom($nom){
    $this->nom = $nom ;
}
public function setprix($prix){
    $this->prix = $prix ;
}
public function setdescription($description){
    $this->description = $description ;
}


}
?>