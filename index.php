<?php

  require_once 'core/Autoloader.php';
  use \Core\Autoloader;

  Autoloader::register();


  $_POST = [
    'name' => 'JP',
    'email' => 'jp@aston.fr',
    'pass' => 'p@$$w0rd',
    'localisation' => 'Paris',
    'age' => '25',
  ];

  $user = new UserEntity;
  // $user = UserEntity::create($_POST)->save();
