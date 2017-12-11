<?php

session_start();

$igroupmaster = $_SESSION['username'];

function findFirstName() {
  return User::findFName($_SESSION['username']);
}

function findLastName() {
  return User::findLName($_SESSION['username']);
}

class User
{
  private $user_id;
  private $username;
  private $password;

  public static function connect() {
    return new mysqli("classroom.cs.unc.edu",
                   "kimia",
                   "genericpassword",
                   "kimiadb");
  }

  public static function getIDofUser($username) {
    $mysqli = User::connect();

    $select = $mysqli->query("select user_id from proj_Users where username = '" .
      $mysqli->real_escape_string($username) . "'");

    $info = $select->fetch_array();
    $user_id = $info['user_id'];

    if ($user_id) {
      //return new User($id, $username, $password);
      return $user_id;
    } else {
      return false;
      //return null;
    }
  }

  public static function findFName($username) {
    $mysqli = User::connect();

    $select = $mysqli->query("select first_name from proj_Users where username = '" .
      $mysqli->real_escape_string($username) . "'");

    $info = $select->fetch_array();
    $first_name = $info['first_name'];
    return $first_name;
  }

  public static function findLName($username) {
    $mysqli = User::connect();

    $select = $mysqli->query("select last_name from proj_Users where username = '" .
      $mysqli->real_escape_string($username) . "'");

    $info = $select->fetch_array();
    $first_name = $info['last_name'];
    return $first_name;
  }


  public static function find($username, $password) {
    $mysqli = User::connect();

    $select = $mysqli->query("select user_id from proj_Users where username = '" .
      $mysqli->real_escape_string($username) . "' and password = '" .
      $mysqli->real_escape_string($password) . "'");

    $info = $select->fetch_array();
    $user_id = $info['user_id'];

    if ($user_id) {
      //return new User($user_id, $username, $password);
      return true;
    } else {
      return false;
      //return null;
    }
  }

  private function __construct($user_id, $username, $password) {
    $this->user_id = $user_id;
    $this->username = $username;
    $this->password = $password;
  }

  public function getID() {
    return $this->user_id;
  }

  public function getJSON() {

    $json_obj = array('user_id' => $this->user_id,
          'username' => $this->username,
          'password' => $this->password);
    return json_encode($json_obj);
  }
}
