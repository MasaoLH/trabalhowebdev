<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="import" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body align="center">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="box">
        <fieldset>
            <legend><b>Tarefas</b></legend>
            <br>
            <div class="m-5">
                <table class="table-striped melhor" align="center">
                    <thead>
                        <tr>
                            <th class="coluna" scope="col">ID Tarefa</th>
                            <th scope="col" class="coluna">ID Projeto</th>
                            <th class="coluna" scope="col">Nome da tarefa</th>
                            <th scope="col" class="coluna">Descrição</th>
                            <th scope="col" class="coluna">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($_GET['id'])) {

                            include_once('config.php');
                            $id = $_GET['id'];
                            $sqlSelect = "SELECT * FROM tarefas WHERE projetosfk=$id";
                            $result = $mysqli->query($sqlSelect);

                            if ($result->num_rows > 0) {
                                while ($reg = mysqli_fetch_assoc($result)) {
                                    echo "<tr class='coluna'>";
                                    echo "<td class='coluna'>" . $reg['idtarefas'] . "</td>";
                                    echo "<td class='coluna'>" . $reg['projetosfk'] . "</td>";
                                    echo "<td class='coluna'>" . $reg['nometarefa'] . "</td>";
                                    echo "<td class='coluna'>" . $reg['descricaotarefa'] . "</td>";
                                    echo "<td class='coluna'>
                                    <a style='text-decoration: none;' class='btn btn-primary bt1' href='atualizartarefa.php?id=$reg[idtarefas]'>Atualizar</a>
                                    <a style='text-decoration: none;' class='btn btn-danger bt2' href='deletetarefa.php?id=$reg[idtarefas]'>Deletar</a>
                                    </td>";
                                    echo "</tr>";
                                }
                            } else {
                                header('Location: index.php');
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
    </div>
    <a align='left' style="text-decoration: none;" href="index.php" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg></a>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>