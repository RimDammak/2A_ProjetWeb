<?php
class Reclamation
{ 
    private string $id;
    private string $name;
    private string $email;
    private string $num_tel;
    private string $objet;
    private string $message;
public function __construct($d,$f,$t,$p,$m){
    $this->name = $d;
    $this->email = $f;
    $this->num_tel = $t;
    $this->objet = $p;
    $this->message = $m;

}
public function getid(){
    return $this->id ;
}
public function getname(){
    return $this->name ;
}
public function getemail(){
    return $this->email ;
}
public function getnum_tel(){
    return $this->num_tel ;
}
public function getobjet(){
    return $this->objet ;
}
public function getmessage(){
    return $this->message ;
}




public function setname($name){
    $this->name = $name ;
}
public function setemail($email){
    $this->email = $email ;
}
public function setnum_tel($num_tel){
    $this->num_tel = $num_tel ;
}
public function setobjet($objet){
    $this->objet = $objet ;
}
public function setmessage($message){
    $this->message = $message ;
}

}
?>