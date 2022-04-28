<?php
class Commande
{ 
    private string $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $nom_c;
public function __construct($d,$f,$t,$p){
    $this->nom = $d;
    $this->prenom = $f;
    $this->email = $t;
    $this->nom_c = $p;

}
public function getid(){
    return $this->id ;
}
public function getnom(){
    return $this->nom ;
}
public function getprenom(){
    return $this->prenom ;
}
public function getemail(){
    return $this->email ;
}
public function getnom_c(){
    return $this->nom_c ;
}





public function setnom($nom){
    $this->nom = $nom ;
}
public function setprenom($prenom){
    $this->prenom = $prenom ;
}
public function setemail($email){
    $this->email = $email ;
}
public function setnom_c($nom_c){
    $this->nom_c = $nom_c ;
}

}
?>