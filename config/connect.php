<?php
  // display errors for users => off
  ini_set("display_errors", "off");
  // log error for dev
  ini_set("log_errors", "on");

  // ip, login, password, project name for connect with DB
  $connect = mysqli_connect('127.0.0.1', 'root', '1', 'fond-form');
