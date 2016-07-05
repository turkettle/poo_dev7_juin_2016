<?php

namespace core\factories;

/**
 *
 */
class ControllerFactory
{

  static public function get($controller_type) {

    $factory_entity = new EntityFactory();
    $controller_class = '\bundles\\' . $controller_type . '\controller\\' . ucfirst($controller_type) . 'Controller';
    $controller = new $controller_class;
    $controller->injectEntityService($factory_entity);
    return $controller;
  }
}
