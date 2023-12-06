<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $data = $_POST['data_projeto'];

        $sqlUpdate = "UPDATE projetos set nomeprojeto='$nome',
         descricaoprojeto='$descricao',
          dataprojeto='$data' WHERE idprojetos='$id'";

        $result = $mysqli->query($sqlUpdate);

    }
    header('Location: index.php');
