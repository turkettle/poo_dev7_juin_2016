<?php


/**
 * class User
 *
 */
class UserEntity
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   *
   * @access public
   */
  public $id;

  /**
   *
   * @access public
   */
  public $name;

  /**
   *
   * @access public
   */
  public $email;

  /**
   *
   * @access public
   */
  public $localisation;

  /**
   *
   * @access public
   */
  public $age;

  /**
   *
   * @access public
   */
  public $role;

  /**
   *
   * @access public
   */
  public $create;

  /**
   *
   * @access public
   */
  public $update;


  private function hydrate($data, $entity) {

    foreach ($data as $property => $value) {
      if (property_exists(__CLASS__, $property)) {
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

    return self::hydrate($data, new UserEntity);
  } // end of member function create

  /**
   *
   *
   * @return void
   * @access public
   */
  public function delete($data) {
  } // end of member function delete

  /**
   * La méthode save permet de sauvegarder les informations de l'utilisateur
   * en base de donnée.
   *
   * @access public
   */
  public function save() {

    $db = new PDO('mysql:host=localhost;dbname=aston', 'root', 'paris');
    $manager = new UserManager($db);
    $manager->flush($this);
    return $this;
  } // end of member function save

  /**
   *
   *
   * @return void
   * @access public
   */
  public function load() {
  } // end of member function load

  /**
   *
   *
   * @return void
   * @access public
   */
  public function connect() {
  } // end of member function connect

  /**
   *
   *
   * @return void
   * @access public
   */
  public function logout() {
  } // end of member function logout





} // end of User
?>
