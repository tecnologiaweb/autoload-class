<?php

function __autoload($classe){
    $classe.=".php";
    $diretorioBase="classes";
    $interator=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($diretorioBase));
    foreach ($interator as $elemento){
        if(strpos($elemento,$classe)!==FALSE){
            if(file_exists($elemento)){
                include_once $elemento;	
            }
        }
    }
    unset($elemento,$interator,$diretorioBase);
}

$objHomem=new Homem();