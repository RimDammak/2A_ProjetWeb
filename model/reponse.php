<?php
class Reponse
{ 
    private string $id;
    private string $contenu_rep;
    private string $id_rec;
public function __construct($d,$f){
    $this->contenu_rep = $d;
    $this->id_rec = $f;

}
public function getid(){
    return $this->id ;
}
public function getcontenu_rep(){
    return $this->contenu_rep ;
}
public function getid_rec(){
    return $this->id_rec ;
}





public function setcontenu_rep($contenu_rep){
    $this->contenu_rep = $contenu_rep ;
}
public function setid_rec($id_rec){
    $this->id_rec = $id_rec ;
}


}
?>