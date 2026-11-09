<?php

class Model{

    function connect(){
        return new PDO('mysql:host='$_ENV['dbhost']';dbname='$ENV_['dbname'],$_ENV['login'], $_ENV['password'],array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
}

?>