<?php
$hasUser = isset($_SESSION['user']);
if ($hasUser) {
  $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pretty Bread</title>
  <!-- <link rel="stylesheet" type="text/css" href="/views/assets/styles/index.css"> -->
  <script src="https://kit.fontawesome.com/506cc2cd8c.js" crossorigin="anonymous"></script>
  <style>
    <?php require_once __DIR__ . '/assets/styles/index.css' ?>
  </style>
</head>
<body>
  <div class="header">
    <a href="/inicio" class="logo">Pretty Bread <i class="fas fa-home"></i></a>
    
    <ul class="header-right">
      <li class="header-menu">
        <?php
        if ($hasUser && $user->id_tipo === 1) {
        ?>
          <a class="<?= $page === 'productos' ? 'active' : '' ?>" href="/productos">Productos</a>
        <?php
        }
        ?>
      </li>
      <li class="header-menu">
        <?php
        if ($hasUser && $user->id_tipo === 1) {
        ?>
          <a class="<?= $page === 'categorias' ? 'active' : '' ?>" href="/categorias">Categorias</a>
        <?php
        }
        ?>
      </li>
      <li class="header-menu">
        <a class="<?= $page === 'tienda' ? 'active' : '' ?>" href="/tienda">Tienda</a>
      </li>
      <li class="header-menu">
        <a class="<?= $page === 'acerca' ? 'active' : '' ?>" href="/acerca">Acerca de</a>
      </li>
      <li class="header-menu">
        <a class="<?= $page === 'contacto' ? 'active' : '' ?>" href="/contacto">Contáctanos</a>
      </li>
      <li class="header-menu">
        <?php
        if ($hasUser) {
        ?>
          <a class="<?= $page === 'pedidos' ? 'active' : '' ?>" href="/pedidos">Pedidos</a>
        <?php
        }
        ?>
      </li>
      <li class="header-menu">
        <?php
        if ($hasUser) {
        ?>
          <a class="<?= $page === 'cuenta' ? 'active' : '' ?>" href="/cuenta/datos"><?= "Hola $user->nombre" ?> <i class="fas fa-sort-down"></i></a>
          <ul class="header-sub-menu">
            <li>
              <a href="/cuenta/datos">Mis datos</a>
            </li>
            <li>
              <a href="/cuenta/direcciones">Direcciones</a>
            </li>
            <li>
              <a href="/cuenta/carrito">Mi carrito <i class="fas fa-shopping-cart"></i></a>
            </li>
            <li>
              <a href="/cuenta/logout">Cerrar Sesión</a>
            </li>
          </ul>
        <?php
        } else {
        ?>
          <a class="<?= $page === 'cuenta' ? 'active' : '' ?>" href="#">Cuenta <i class="fas fa-sort-down"></i></a>
          <ul class="header-sub-menu">
            <li>
              <a href="/cuenta/login">Iniciar Sesión</a>
            </li>
            <li>
              <a href="/cuenta/registrarme">Registrarme</a>
            </li>
          </ul>
        <?php
        }
        ?>
      </li>
    </ul>
  </div>
  <div class="content">
    <?php
    require_once $content;
    ?>
  </div>
  <div class="footer">
    <ul>
      <li>
        <a href="#" class="footer-link">Términos y Condiciones</a>
      </li>
      <li>
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter-square"></i>
        <i class="fab fa-instagram-square"></i>
      </li>
    </ul>
  </div>
</body>
</html>