<?php

    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];

    switch ($metodo) {
        case 'GET':
           echo "AQUI ACOES DO METODO GET";
            break;
        
        case 'POST':
            echo "AQUI ACOES DO METODO POST";
            break;
        
        default:
           echo "METODO NAO ENCONTRADO";
            break;
    }
    //echo "Método de requisicao: " . $metodo;

    //$usuarios = [
       // ["id" => 1, "nome" => "Fulano", "email"=> "fulano@email"],
       // ["id" => 2, "nome" => "Ciclano", "email" => "ciclano@email"]

   // ];

    //echo json_encode($usuarios);

?>