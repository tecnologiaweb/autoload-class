<?php

function __autoload($classe){
    $classe.=".php";
    if(file_exists("classes".DIRECTORY_SEPARATOR.$classe)){
        include_once "classes".DIRECTORY_SEPARATOR.$classe;	
    }
}

$objHomem=new Homem();