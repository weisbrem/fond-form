<?php
  require_once '../config/connect.php';

  $name = $_POST['name'];
  $amount_min = $_POST['amount-min'];
  $average_amount = $_POST['average-amount'];
  $amount_max = $_POST['amount-max'];
  $amount = $amount_min + $average_amount + $amount_max;

  mysqli_query($connect, "INSERT INTO `paid` (`id`, `name`, `amount`) VALUES (NULL, '$name', '$amount')");

  header('Location: /');