<?php

    if(!empty($_GET['id'])){

        include_once('config.php');
        $id= $_GET['id'];
        $sqlSelect = "SELECT * FROM projetos WHERE idprojetos=$id";
        $result = $mysqli->query($sqlSelect);

        if($result -> num_rows > 0)
        {
            $sqlDelete = "DELETE FROM projetos WHERE idprojetos = '$id'";
            $resultDelete = $mysqli->query($sqlDelete);
            header('Location: index.php');
        }else{
            header('Location: index.php');
        }


    }
