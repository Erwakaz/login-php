<?php
if($nome == $_POST['usuario-login'] && $senha == $_POST['senha-login']){
        header('location: index.php');
        echo"Logado com sucesso";
}
?>