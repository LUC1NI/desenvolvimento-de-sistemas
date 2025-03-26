<?php 

    declare(strict_types=1);

    echo"<h2 class='' id=''>Aula 04</h2>";

    // void, int, float, string, bool, array, object, null
 
    function tituloAula04(){

        echo"<h2 class='' id=''>Aula 04</h2>";
    }

    tituloAula04();
    tituloAula04();
    tituloAula04();
    tituloAula04();

    function criaTitulo($texto){
        echo "<h2 class='' id=''>$texto</h2>";
    }

    criaTitulo("Aula Funcoes");
    criaTitulo("Outra Aula 04");
    
    /* 
    function tituloLegal(){
        echo "<h2>##################</h2>";
        echo "<h2>## $texto ##</h2>";
        echo "<h2>##################</h2>";
    }
    tituloLegal("Calcular Medias");

    function calcularMedias($nome, $nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;
        if($media >= 6){
            echo "<h2>$nome você passou com média $media </h2>";
        }else{
            echo "<h2>$nome você reprovou com média $media</h2>";
        }
        
    }

    calcularMedias("João", 7, 9);
    calcularMedias("Mateus", 2, 7.1);
    calcularMedias("lucas", 5, 8.1);

    function soma($a, $b){
        $soma = $a + $b;
        echo "<li> $a + $b = $soma </li>";
    }

    echo "<br> Lista de somas: ";
    soma(4, 8);
    soma(9, 3);
    soma(2, 7);


    echo "<br>";

    function somarNumeros(...$numeros){
        //var_dump($numeros);
        $soma = 0;
        echo "<li>";
        for($i = 0; $i < count($numeros); $i++){
            $soma += $numeros[$i];
            echo $numeros[$i] . " + ";
        }
            echo "<li>= $soma </li>";
    }

    //somarNumeros([2, 3, 4, 5, 6, 7, 8, 9, 10]);

    somarNumeros();
    
    somarNumeros(2, 3, 5, 7, 8);

    */

    function fazalgo($nome, $numero, $texto, ...$coisas){
        var_dump($coisas);
    }

    fazalgo("joao", 55, "oi", false, "outro texto", 19.30);
    fazalgo("joao", 55, "oi");

    tituloLegal("Outras funcoes");

    $verdadeira = true;

    if ($verdadeira) {
        function calcularIdade($nome, $ano){
            $idade = 2025 - $ano;
            echo "<li> $nome tem $idade anos </li>";
        }
    }

    if($verdadeira) {
        calcularIdade("José", 1987);
    }

    function aleatoria(){
        echo "<br> Aleatoria: ";

        function geraNumeros(){
            echo "7";
        }
    }

    aleatoria();
    geraNumeros();

    function somaCinco(&$num){
        $num += 5;
        echo "<br> Num: $num";
    }

    $var1 = 19;
    echo "<br> Var: $var1";
    somaCinco($var1);
    
    echo "<br> Var: $var1";


    function subtracao($a=20, $b=2){
        $sub = $a - $b;
        echo "<li> $a - $b = $sub </li>";
    }

    subtracao(10,5);
    subtracao(10);
    subtracao();

    function divisao(float $n1, float  $n2) : float{
        var_dump($n1);
        var_dump($n2);
        $div = $n1 / $n2;
        return $div;
        //echo "<li> $n1 / $n2 = $div </li>";
    }

    echo "<br> Divisão:";
    echo "<br>";

    divisao(12,3);

    $teste = "divisao";
    $teste(10,22);

    


    






?>