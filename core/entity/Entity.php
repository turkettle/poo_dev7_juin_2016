<?php

namespace core\entity;

use \core\interfaces\ContentEntityInterface;

/**
 * class Entity
 *
 */
abstract class Entity implements ContentEntityInterface
{


  /**
   *
   * @access public
   */
  public $created;

  /**
   *
   * @access public
   */
  public $updated;

  /**
   * Permet d'hydrate des objets d'entités.
   *
   * @return  $entity Object
   *          Object of Entity instance.
   * @access private
   */
  private function hydrate($data, $entity) {

    foreach ($data as $property => $value) {
      if (property_exists($entity, $property)) {
        $entity->$property = $value;
      }
    }

    return $entity;
  }

  /**
   *
   *
   * @return void
   * @access public
   */
  public static function create($data) {

    $entity = get_called_class();

    return self::hydrate($data, new $entity);
  } // end of member function create

  /**
   *
   *
   * @return void
   * @access public
   */
  public function delete() {
  } // end of member function delete

  /**
   * La méthode save permet de sauvegarder les informations de l'utilisateur
   * en base de donnée.
   *
   * @access public
   */
  public function save() {

    $db = new PDO('mysql:host=localhost;dbname=aston', 'root', 'paris');
    $entity_class = get_class($this);   //  => UserEntity
    $class = str_replace('Entity', 'Manager', $entity_class);   //  => UserManager
    $manager = new $class($db);   //  => new UserManager($db)
    $manager->flush($this);

    return $this;
  } // end of member function save

  /**
   *
   *
   * @return void
   * @access public
   */
  public function load($entity_id) {

    print '<pre>$entity_id => <br />';
    print_r($entity_id);
    print "</pre>";
    print '<code><em>From class ' . __CLASS__ . ' in function ' . __FUNCTION__ . '() line ' . __LINE__ . ' in file ' . __FILE__ . '</em>.</code>';
  } // end of member function load



























} // end of Entity
