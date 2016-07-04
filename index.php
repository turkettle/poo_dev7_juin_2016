<?php

  require_once 'core/autoload.php';


  $_POST = [
    'name' => 'JP',
    'email' => 'jp@aston.fr',
    'pass' => 'p@$$w0rd',
    'localisation' => 'Paris',
    'age' => '25',
  ];

  use \bundles\user\UserEntity;
  $user = new UserEntity();
  // $user = UserEntity::create($_POST)->save();
