<?php

abstract class EntityManager {

  private $_db;
  protected $table;

    final public function __construct($db) {

      $this->_db = $db;
      $this->table = lcfirst(str_replace('Manager', '', get_called_class()));
    }

    public function flush(ContentEntityInterface $entity) {

      if ($entity->id) {
        // UPDATE
      }
      else {

        $query_string = 'INSERT INTO {$this->table} (';
        $properties = [];

        foreach ($entity as $key => $value) {
          $properties[] = $value;
        }

        $query_string .= implode(', ', $properties) . ') VALUES (';

        // $query = $this->_db->prepare('
        //   INSERT
        //   INTO user (name, email, localisation, age, `create`, `update`)
        //   VALUES (:name, :email, :localisation, :age, NOW(), NOW())');
        //
        // $query->bindParam(':name', $user->name);
        // $query->bindParam(':email', $user->email);
        // $query->bindParam(':localisation', $user->localisation);
        // $query->bindParam(':age', $user->age);
        // $query->execute();
      }
    }













}
