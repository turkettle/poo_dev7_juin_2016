<?php

namespace core\controller;

/**
 *
 */
Abstract class Router {

  private $app;
  private $action;
  private $params;

  final function __construct()
  {
    $this->setApp($_GET['app']);
    $this->setAction($_GET['action']);
    $this->setParams($_GET);
  }

  /*    SETTERS   */
  private function setApp($app) {
    $this->app = $app;
  }

  private function setAction($action) {
    $this->action = $action;
  }

  private function setParams($params) {

    foreach ($params as $param => $value) {

      if ($param != 'app' && $param != 'action') {
        $this->params[$param] = $value;
      }
    }
  }

  /*    GETTERS   */
  public function getApp() {
    return $this->app;
  }

  public function getAction() {
    return $this->action;
  }

  public function getParam($param) {
    return $this->params[$param];
  }

  /*    METHODS   */

  public function getController() {

    $controller = '\bundles\\' . $this->app . '\controller\\' . ucfirst($this->app) . 'Controller';
    return new $controller;
  }
}
