<?php

    include_once "funcoes.php";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
    $produto = $_POST["produto"] ?? null;
    $preco = $_POST["preco"] ?? null;
    $quantidade = $_POST["quantidade"] ?? null;

    if(variavelValida($produto) && variavelValida($preco) && variavelValida($quantidade)){

        $info = calculaEFormataEstoque($produto, $preco, $quantidade);
        /* echo "<pre>";
        var_dump($info);
        echo "</pre>"; */

        include "infoProduto.php";

        
    }else{
         echo "<h3>Em branco...</h3>";
         include "formulario.php";
    }

    }else {
       // echo "<h3>Opa erro...</h3>"
       include "formulario.php";
    }

?>
