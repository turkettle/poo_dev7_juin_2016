<?php

namespace core\factories;

/**
 *
 */
class EntityFactory
{

  public function get($entity_type) {

    $entity_class = '\bundles\\' . $entity_type . '\entity\\' . ucfirst($entity_type) . 'Entity';
    return new $entity_class;
  }
}
