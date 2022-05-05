<?php
class Facture
{ 
    private string $id_f;
    private string $nom_p;
    private string $prix;
    private string $id_c;
public function __construct($d,$f,$t){
    $this->nom_p = $d;
    $this->prix = $f;
    $this->id_c = $t;

}
public function getid_f(){
    return $this->id_f ;
}
public function getnom_p(){
    return $this->nom_p ;
}
public function getprix(){
    return $this->prix ;
}
public function getid_c(){
    return $this->id_c ;
}





public function setnom_p($nom_p){
    $this->nom_p = $nom_p ;
}
public function setprix($prix){
    $this->prix = $prix ;
}
public function setid_c($id_c){
    $this->id_c = $id_c ;
}


}
?>