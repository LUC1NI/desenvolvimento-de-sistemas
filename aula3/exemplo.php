<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos - Shopee</title>
</head>
<style>
        /* Definindo o estilo geral do corpo */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            color: #333;
        }

        /* Estilo para o título */
        h1 {
            font-size: 2.5em;
            color: #1d3557;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Estilo da tabela */
        table {
            width: 80%;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: #fff;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
        }

        /* Cabeçalhos */
        th {
            background-color: #1d3557;
            color: white;
            font-size: 1.1em;
        }

        /* Estilo das linhas */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        /* Adicionando bordas finas */
        td, th {
            border-bottom: 1px solid #ddd;
        }

        /* Estilo de preço */
        td:nth-child(3) {
            color: #e63946;
            font-weight: bold;
        }

        /* Estilo do total */
        .total {
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
<body>

<h1>Lista de Produtos</h1>

<?php 

$produtos = [
    ["nome" => "Celular", "preco" => 1500.987, "Categoria" => "elet"],
    ["nome" => "Notebook Gamer", "preco" => 5800.987, "Categoria" => "pc"],
    ["nome" => "Air Pods", "preco" => 1987.99, "Categoria" => "ac"],
    ["nome" => "Cadeira Gamer", "preco" => 890.987, "Categoria" => "moveis"],
    ["nome" => "Smartwatch", "preco" => 799.99, "Categoria" => "elet"],
    ["nome" => "TV 4K", "preco" => 2999.00, "Categoria" => "elet"],
    ["nome" => "Cafeteira Expresso", "preco" => 449.50, "Categoria" => "elet"],
    ["nome" => "Mouse Gamer", "preco" => 189.99, "Categoria" => "ac"],
    ["nome" => "Teclado Mecânico", "preco" => 349.90, "Categoria" => "ac"],
    ["nome" => "Monitor Curvo", "preco" => 1500.99, "Categoria" => "pc"]
];

$somaValores = 0;

?>

    <table style="border: 1px solid black;">
        <tr>
            <th>Nome</th>
            <th>Cadegoria</th>
            <th>Preço R$</th>
        </tr>

        <?php  
            foreach ($produtos as $item) {
                $somaValores += $item["preco"];
        ?>
            <tr>
                <td><?=$item["nome"]?></td>
                <td><?=$item["Categoria"]?></td>
                <td><?=number_format($item["preco"], 2, ",", ".")?></td>
            </tr>
        <?php    
            }
        ?>

    </table>

    <!-- Exibindo o Total -->
    <div class="total">
        <p>Total: R$ <?=number_format($somaValores, 2, ",", ".")?></p>
    </div>
    
</body>
</html>
