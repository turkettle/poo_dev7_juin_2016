<?php

namespace core\factories;

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
