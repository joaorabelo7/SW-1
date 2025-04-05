<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>


<style>
    table{
        border: 3px solid black;
    }
    tr,td,th{
        border: 2px solid black;
    }
    tr{
        background-color :rgb(224, 145, 198);
    }
</style>

<body>
    <?php
        $produtos = [
            [ 'categoria'=> 'Roupas', 'nome' => 'Camiseta', 'preco' => 23.50,] ,
            [ 'categoria'=> 'Frutas', 'nome' => 'Uva', 'preco' => 2.30,] ,
            [ 'categoria'=> 'Comida', 'nome' => 'Lasanha', 'preco' => 13.50,] ,
        ];
        echo"<Table border ='1'>";
        echo"<tr>
                <th>Categoria</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>";
            $i = 0;
        foreach ($produtos as $produto) {
            if($i == 0){
                $cor_fundo = "background-color:#E6E6FA;";
            }
            elseif($i == 1){
                $cor_fundo = 'background-color:#B2F2B9;';
            }
            elseif($i == 2){
                $cor_fundo = 'background-color:#FFDAB9;';
            }

            echo "<tr>
                    <td style = '$cor_fundo'>{$produto['categoria']}</td>
                    <td style = '$cor_fundo'>{$produto['nome']}</td>
                    <td style = '$cor_fundo'>{$produto['preco']}</td>
                </tr>";
                $i++;
        }
        echo "</table>";

    ?>
    
</body>
</html>