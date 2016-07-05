<?php

namespace bundles\user\controller;

/**
 *
 */
class UserController {

  public function viewAction($uid) {

    // ?app=user  &action=view  &uid=1

    $user = UserEntity::load($uid);
  }
}
