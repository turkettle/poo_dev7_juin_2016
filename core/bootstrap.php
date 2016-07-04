<?php

use core\factories\RouterFactory;

// ?app=user&action=view     &uid=1

  $router = RouterFactory::getInstance();
  print '<pre>$router->getApp() => <br />';
  print_r($router->getApp());
  print "</pre>";
  print '<code><em>From class ' . __CLASS__ . ' in function ' . __FUNCTION__ . '() line ' . __LINE__ . ' in file ' . __FILE__ . '</em>.</code>';
  // $controller = $router->getApp() . 'Controller';
  // $action = $router->getAction();
  // // new UserController;
  // new $controller;
  // // UserController->view(1);
  // $controller->$action($router->getUid());
