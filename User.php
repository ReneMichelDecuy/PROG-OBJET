<?php
echo "Chargement Class User";
class User{

    //Propriété (Private )
    //Membres
    private $id_;
    private $login_;
    private $mdp_;


    //Méthode ( Public )
    public function __construct($id_,$NewLogin,$pass){
        $this->login_ = $NewLogin;
        $this->mdp_ = $pass;
        $this->id_ = $id_;
    }

    public function getNom(){
        return $this->login_;
    }

    public function seConnecter($UnMotDePass){
        
        if($UnMotDePass==$this->mdp_){
            return true;
        }else{
            return false;
        }

    }
}
highlight_file(__FILE__);
?>