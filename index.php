<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>
    <h1>Cadastro de Contatos</h1>
    <table border="1">
        <tr>
            <th>Nome</th><th>Telefone</th>
        </tr> 
        <?php 
        $conexao = mysqli_connect("localhost", "root", "", "contatos");

        $sqlbusca = "select * from pessoas";
        $todasaspessoas = mysqli_query($conexao, $sqlbusca);

        while($umapessoa = mysqli_fetch_assoc($todasaspessoas)){
            echo "<tr>";
            echo "<td>" . $umapessoa["nome"] . "</td>";
            echo "<td>" . $umapessoa["telefone"] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conexao);
        ?>
    </table>

</body>
</html>