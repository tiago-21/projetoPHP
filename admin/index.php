<?php include_once './config/config.php'; ?>
    
<!-- Negando a condição do if. Caso não encontre a sessão, ele redireciona para o login. -->
<?php
    if(!isset($_SESSION['userLogged'])) {
        header("Location: login.php");
    }    
?>

<!DOCTYPE html>
<html lang="pt-BR">

    <!-- Include once chama o arquivo apenas uma única vez -->
    <?php include_once './partials/head.php'; ?>

    <body>

        <section>
            <?php include_once './partials/menu.php'; ?>
            <?php include_once './pages/home.php'; ?>
        </section>

        <?php include_once './partials/scripts.php'; ?>
    </body>
</html>