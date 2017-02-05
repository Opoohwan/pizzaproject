<?php
  require('partials/header.php');

  if (isset($_GET['pizza'])) {
    $pizza = $_GET['pizza'];
    include('partials/pizza.php');
  } else {
    include('partials/pizzas.php');
  }
?>