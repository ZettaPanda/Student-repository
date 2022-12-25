<?php 
    if (isset($_GET['action']) && isset($_GET['id'])) {
        unset($_SESSION['cart'][$_GET['id']]);
        header("Location: ". basename($_SERVER["SCRIPT_FILENAME"], '.php') .".php");
    }

?>

<nav class="header">
    <div class="logo-container">
        <div class="logo-img"></div>
        <div class="logo-text ws-nowrap text-md text-800">HAPPY PET</div>
    </div>
    <menu class="navigation">
        <dt class="active-nav"><a href="./index.php">Главная</a></dt>
        <dt class=""><a href="./products.php">Друзья</a></dt>
        <dt class=""><a href="">О сервисе</a></dt>
        <dt class=""><a href="">Контакты</a></dt>
    </menu>
    <nav class="number">
        <div class="number-icon"></div>
        <div class="number-text ws-nowrap text-800 text-s">+ 7 968 658-23-65</div>
    </nav>

    <?php require_once('./cart.php') ?>

</nav>