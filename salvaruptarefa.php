<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $sqlUpdate = "UPDATE tarefas set nometarefa='$nome',
         descricaotarefa='$descricao'
        WHERE idtarefas='$id'";

        $result = $mysqli->query($sqlUpdate);

    }
    header('Location: index.php');
