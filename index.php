<?php

  require_once 'core/Autoloader.php';

  Autoloader::register();

  use \core;

  $_POST = [
    'name' => 'JP',
    'email' => 'jp@aston.fr',
    'pass' => 'p@$$w0rd',
    'localisation' => 'Paris',
    'age' => '25',
  ];

  $user = new UserEntity;
  // $user = UserEntity::create($_POST)->save();
