<?php

    if(!empty($_GET['id'])){

        include_once('config.php');
        $id= $_GET['id'];
        $sqlSelect = "SELECT * FROM tarefas WHERE idtarefas=$id";
        $result = $mysqli->query($sqlSelect);

        if($result -> num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tarefas WHERE idtarefas = '$id'";
            $resultDelete = $mysqli->query($sqlDelete);
            header('Location: index.php');
        }else{
            header('Location: index.php');
        }


    }

