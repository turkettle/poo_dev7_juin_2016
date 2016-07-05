<?php

namespace core\controller;

use core\factories\EntityFactory;

/**
 *
 */
abstract class Controller
{

  protected $service;

  public function injectEntityService(EntityFactory $factory) {
    $this->service = $factory;
  }
}
