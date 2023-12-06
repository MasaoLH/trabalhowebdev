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
    <div class="box">
        <fieldset>
            <legend><b>Projetos</b></legend>
            <br>
            <div class="m-5">
                <table class="table-striped melhor" align="center">
                    <thead>
                        <tr>
                            <th class="coluna" scope="col">ID</th>
                            <th class="coluna" scope="col">Nome do projeto</th>
                            <th class="coluna" scope="col">Data de início</th>
                            <th scope="col" class="coluna">Descrição</th>
                            <th scope="col" class="coluna">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = 'SELECT * FROM projetos';
                        include_once('config.php');
                        if ($resp = mysqli_query($mysqli, $sql)) {
                            $idprojetos = array();
                            $nomeprojeto = array();
                            $dataprojeto = array();
                            $descricaoprojeto = array();
                            $i = 0;
                            while ($reg = mysqli_fetch_assoc($resp)) {
                                $idprojetos[$i] = $reg['idprojetos'];
                                $nomeprojeto[$i] = $reg['nomeprojeto'];
                                $dataprojeto[$i] = $reg['dataprojeto'];
                                $descricaoprojeto[$i] = $reg['descricaoprojeto'];

                                echo "<tr class='coluna'>";
                                echo "<td class='coluna'>" . $reg['idprojetos'] . "</td>";
                                echo "<td class='coluna'>" . $reg['nomeprojeto'] . "</td>";
                                echo "<td class='coluna'>" . $reg['dataprojeto'] . "</td>";
                                echo "<td class='coluna'>" . $reg['descricaoprojeto'] . "</td>";
                                echo "<td class='coluna'>
                                    <a style='text-decoration: none;' class='btn btn-primary bt1' href='atualizar.php?id=$reg[idprojetos]'>Atualizar</a>
                                    <a style='text-decoration: none;' class='btn btn-primary bt1' href='mostrartarefas.php?id=$reg[idprojetos]'>Ver tarefas</a>
                                    <a style='text-decoration: none;' class='btn btn-primary bt1' href='inserttarefa.php?id=$reg[idprojetos]'>Criar tarefas</a>
                                    <a style='text-decoration: none;' class='btn btn-danger bt2' href='delete.php?id=$reg[idprojetos]'>Deletar</a>
                                    </td>";
                                echo "</tr>";
                                $i++;
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <br><br>
            <a style="text-decoration: none;" href="insert.php" class="butao">CRIAR PROJETO</a>
    </div>
    </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>