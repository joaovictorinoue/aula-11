<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
        <h1 class="titulo">📜 Tarefas 👍</h1>
    <table class="table table-dark">
        <tr class="table-active">
            <th>Nome da Tarefa</th>
            <th>Data da Tarefa</th>
            <th>Situação da Tarefa</th>
        </tr>
        <?php
        $conexao = mysqli_connect("localhost", "root", "", "contatos");

        $sqlbusca = "select * from tarefas";
        $todasaspessoas = mysqli_query($conexao, $sqlbusca);

        while ($umapessoa = mysqli_fetch_assoc($todasaspessoas)) {
            echo "<tr>";
            echo "<td>" . $umapessoa["nome_tarefa"] . "</td>";
            echo "<td>" . $umapessoa["data_tarefa"] . "</td>";
            echo "<td>" . $umapessoa["situacao_tarefa"] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conexao);
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>