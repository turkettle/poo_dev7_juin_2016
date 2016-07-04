<?php


/**
 * interface ContentEntityInterface
 *
 */
interface ContentEntityInterface
{

  public static function create($data);
  public function delete();
  public function save();
  public function load();

} // end of ContentEntityInterface
