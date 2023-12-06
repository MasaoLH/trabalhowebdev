<?php
if(!empty($_GET['id']))
{
include_once('config.php');
$id = $_GET['id'];
};
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #f4f4f4;
        }
    </style>
    <title>Criar tarefas</title>

</head>
<body>
    <div class="box">
        <form method="POST" action="inserttarefa.php">
            <fieldset>
                <legend align='center'><b>Criando nova Tarefa</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome da tarefa</label>
                </div>
                <br><br>
                <div class="inputBox">
                <textarea id="descricao" name="descricao" required></textarea>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <div class="inputBox">
                    <input type="hidden" name="projetosfk" id="projetosfk" class="inputUser" required value="<?php echo $id;?>">
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>
</body>
<a style="text-decoration: none;" href="index.php" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg></a>
</html>

<?php

include('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $fk = $_POST['projetosfk'];
    $sql = "INSERT INTO tarefas (nometarefa, descricaotarefa, projetosfk) VALUES ('$name','$descricao','$fk' )";

    if ($mysqli->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
mysqli_close($mysqli);

?>