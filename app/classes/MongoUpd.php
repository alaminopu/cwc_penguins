<?php
/**
* Mongo Cutom class
*/


class MongoUpd extends OAuth2\Storage\Mongo{
  protected function checkPassword($user, $password)
  {
    //return $user['password'] == $password;
    return Hash::check($password, $user['password']);
  }
}
