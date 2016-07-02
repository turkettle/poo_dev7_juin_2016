<?php

namespace  Core;

class Autoloader {

  static public function register() {
    

    spl_autoload_register(array(__CLASS__, 'autoload'));
  }

  static public function autoload($class) {

    print '<pre>$class => <br />';
    print_r($class);
    print "</pre>";
    print '<code><em>From class ' . __CLASS__ . ' in function ' . __FUNCTION__ . '() line ' . __LINE__ . ' in file ' . __FILE__ . '</em>.</code>';
  }

}
