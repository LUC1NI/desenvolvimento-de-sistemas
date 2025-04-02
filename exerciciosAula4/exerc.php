<?php 

    function calcularImc(float $peso, float $altura) : float{
        $imc = $peso / ($altura ** 2);
        return $imc;
        //return number_format($imc, 2, ", ", ".");
    }

    function classificarImc(float $imc) : string{
        if ($imc < 18.5) return "Abaixo do peso";
        elseif ($imc < 25) return "Normal";
        elseif ($imc < 30) return "Sobrepeso";
        else return "Obesidade";
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC </title>
</head>
<body>
    <h2>Calculadora de IMC</h2>

    <form action="" method="get">
        Altura: <input type="number" name="altura" step="0.01">
        Peso: <input type="number" name="peso" step="0.01">
        Idade: <input type="number" name="idade" step="0.01">
        <input type="submit" value="Calcular">
    </form>

    <?php 

        var_dump($_GET);
        $altura = $_GET["altura"] ?? null;
        $peso = $_GET["peso"] ?? null;
        $idade = $_GET["idade"] ?? null;

        if(!is_null($altura) && !is_null($peso) && !is_null($idade)){
            echo "Valor: $altura";
            if(!empty($altura) && !empty($peso) && !empty($idade)){
              //echo "<h3>agora sim...</h3>";
              $imc = calcularImc($peso,$altura);

              echo "<hr>";
              echo "<br>Peso: $peso";
              echo "<br>Altura: $altura";
              echo "<br>Idade: $idade";
              echo "<br>IMC:" . calcularImc($peso, $altura);
              echo "<br>Classificação: " . classificarImc($imc);
      
              // $imc = $peso / ($altura ** 2);
               // echo "<br>IMC: $imc";

            }else{
                echo "<h3>valores em branco</h3>";
            }
        }else {
            echo "<h3>Preencha todos os campos</h3>";
        }

        

    
    
    ?>
</body>
</html>