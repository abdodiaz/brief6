<?php
require __DIR__ . "/../Config.php";

class UserModel{
    public $con;
    function __construct()
    {
        $this->con=new Config();
    }
    function GetAll()
    { 
        $selects="SELECT * FROM User";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function Insert($Referance,$Cin,$Nom,$Prenom,$Tele,$Age,$Email)
    {
    $insert="INSERT INTO `user`(`Referance`, `Cin`, `Nom`, `Prenom`, `Tele`, `Age`, `Email`) VALUES ('$Referance','$Cin','$Nom','$Prenom','$Tele',$Age,'$Email')";
    $this->con->connect($insert);    
    }
 
}