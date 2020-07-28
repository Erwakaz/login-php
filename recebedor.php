<?php
    if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
        if(isset($_POST['senha']) && !empty($_POST['senha'])){
            echo "Funcionou";
            $nome = $_POST['usuario'];
            $senha = $_POST['senha'];

            header('location: login.php');
        }
    }
?>