<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h3 {
            color: #333;
            text-align: center;
        }

        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #218838;
        }

        .resultado {
            margin-top: 20px;
            padding: 15px;
            background-color: #e7f3fe;
            border: 1px solid #b3d7ff;
            border-radius: 4px;
            text-align: center;
            font-size: 18px;
            color: #007bff;
        }

        .resultado strong {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>

<form method="get"> 
    Numero 1: <input type="number" name="n1" ><br>
    Numero 2: <input type="number" name="n2" ><br>
    <button type="submit">Enviar</button>
</form>

    <?php 

        $a = $_GET["n1"] ?? null;
        $b = $_GET["n2"] ?? null;
    
        if(!is_null($a) && !is_null($b)){
            $soma = $a + $b;
            echo "$a + $b = <h3>$soma</h3>";
        }else {
            echo "<h3>Preencha os campos...</h3>";
        }
    
   
    ?>
    
</body>
</html>