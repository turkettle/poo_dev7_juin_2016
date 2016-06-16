<?php

class UserManager {

  private $_db;

    public function __construct($db) {

      $this->_db = $db;
    }

    public function flush(UserEntity $user) {

      if ($user->id) {
        // UPDATE
      }
      else {

        $query = $this->_db->prepare('
          INSERT
          INTO user (name, email, localisation, age, `create`, `update`)
          VALUES (:name, :email, :localisation, :age, NOW(), NOW())');

        $query->bindParam(':name', $user->name);
        $query->bindParam(':email', $user->email);
        $query->bindParam(':localisation', $user->localisation);
        $query->bindParam(':age', $user->age);
        $query->execute();
      }
    }













}
