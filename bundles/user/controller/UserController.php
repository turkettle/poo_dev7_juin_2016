<?php

namespace bundles\user\controller;

use bundles\user\entity\UserEntity;
use core\factories\EntityFactory;
use core\controller\Controller;

/**
 *
 */
class UserController extends Controller {

  public function viewAction($uid) {

    // ?app=user  &action=view  &uid=1

    $user_entity = $this->service->get('user');
    $user_entity->load($uid);
  }






}
