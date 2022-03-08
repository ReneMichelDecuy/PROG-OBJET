<?php
echo"chargement de la page user";
class User{

    //Propriété (Private)
    //MEmbres
    private $Login_;

    //Methode (Public)
    public function __construct($NewLogin)
    {
        $this->Login_= $NewLogin;
    }

    public function getNom()
    {
        return $this->Login_;
    }

    public function connect($Newmdp)
    {
        $this->mdp_=$Newmdp;
        
    }
}


?>