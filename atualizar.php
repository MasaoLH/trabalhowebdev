<?php

    if(!empty($_GET['id'])){

        include_once('config.php');
        $id= $_GET['id'];
        $sqlSelect = "SELECT * FROM projetos WHERE idprojetos=$id";
        $result = $mysqli->query($sqlSelect);

        if($result -> num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result)){
                $name = $user_data['nomeprojeto'];
                $data = $user_data['dataprojeto'];
                $descricao = $user_data['descricaoprojeto'];
            }
        }
        else{
            header('Location: index.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar projetos</title>
    <style>
        body{
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>

    <div class="box">
        <form method="POST" action="salvaratualizacao.php">
            <fieldset>
                <legend align='center'><b>Atualizando Projeto</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="nome" required value="<?php echo $name?>">
                    <label for="nome" class="labelInput">Nome do projeto</label>
                </div>
                <br><br>
                <div class="inputBox" >
                <textarea id="descricao" name="descricao" required><?php echo $descricao?></textarea>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <br><br>
                <label for="data_projeto"><b>Data</b></label>
                <input type="date" name="data_projeto" id="data_projeto" required value="<?php echo $data?>">
                <br><br><br>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
    <a style="text-decoration: none;" href="index.php" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg></a>
</body>

</html>