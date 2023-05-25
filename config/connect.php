<?php
  // ip, login, password, project name for connect with DB
  $connect = mysqli_connect('127.0.0.1', 'root', '', 'fond-form');

  if(!$connect) {
    die('connect error');
  }