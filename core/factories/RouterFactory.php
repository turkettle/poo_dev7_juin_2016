<?php

namespace core\factories;

use \bundles\user\controller\UserRouter;

  /**
   *
   */
  Abstract class RouterFactory
  {

    static public function getInstance() {
      $type =  $_GET['app'];
      $class = '\bundles\\' . $type . '\controller\\' . ucfirst($type) . 'Router';
      return new $class;
    }
  }
