<!-- unset matando a sessão que não existir e redirecionando para o login. -->

<?php
    include_once '.config/config.php';
    unset($_SESSION['userLogged']);
    header("Location: login.php");
?>