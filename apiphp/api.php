<?php

    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];

    $arquivo = 'usuarios.json';

    if(!file_exists($arquivo)){
        file_put_contents($arquivo,json_encode([],JSON_PRETTY_PRINT | JSONUNESCAPE_UNICODE));

    }

    $usuarios = json_encode(file_get_contents($arquivo),true);
     //$usuarios = [
      // ["id" => 1, "nome" => "Fulano", "email"=> "fulano@email"],
       //["id" => 2, "nome" => "Ciclano", "email" => "ciclano@email"]

   // ];

    switch ($metodo) {
        case 'GET':
          // echo "AQUI ACOES DO METODO GET";
          echo json_encode($usuarios);
            break;
        
        case 'POST':
            //echo "AQUI ACOES DO METODO POST";
            $dados = json_decode(file_get_contents('php://input'),true);
            //print_r($dados);
            $novo_usuario = [
                "id"=> $dados["id"],
                "nome"=> $dados["nome"],
                "email"=> $dados["email"]
            ];
            array_push($usuarios, $novo_usuario);
            echo json_encode('usuario inserido com sucesso!');
            print_r($usuarios);
            break;
        
        default:
           echo "METODO NAO ENCONTRADO";
            break;
    }
    echo "Método de requisicao: " . $metodo;

    //$usuarios = [
       //["id" => 1, "nome" => "Fulano", "email"=> "fulano@email"],
       //["id" => 2, "nome" => "Ciclano", "email" => "ciclano@email"]

    //];

    

      

  

?>