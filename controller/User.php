<?php
require_once __DIR__ . "/../model/UserModel.php";
class User
{
    function index()
    {
      require_once __DIR__ . "/../view/User/User.php";
    }
    function create(){
        if (isset($_POST['sub'])){
          $obj = new UserModel();
        //generate
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $result = '';
        for ($i = 0; $i < 5; $i++)
        $result .= $characters[mt_rand(0, 61)];
        $ref= $_POST["cin"].$result;
        $obj->Insert($ref,$_POST["cin"],$_POST["nom"],$_POST["prnom"],$_POST["tel"],$_POST["age"],$_POST["email"]);
        }
        
    }
}