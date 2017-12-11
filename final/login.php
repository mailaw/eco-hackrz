<?php
session_start();

function check_password($username, $password) {
  $request = User::find($username, $password);
  if ($request == null) {
    unset($_SESSION['username']);
    header("HTTP/1.0 500 Server Error");
    print("Incorrect username or password. Please try again or register as a new user.");
    exit();
  } else {
    return true;
  }
}

if(!isset($_REQUEST['username'])) {
  header("HTTP/1.0 400 Bad Request");
  print("Missing email");
  exit();
}
$username = trim($_REQUEST['username']);
if($username == "") {
  header("HTTP/1.0 400 Bad Request");
  print("Bad email");
  exit();
}
if(!isset($_REQUEST['password'])) {
  header("HTTP/1.0 400 Bad Request");
  print("Missing password");
  exit();
}
$ipassword = trim($_REQUEST['password']);
if($ipassword == "") {
  header("HTTP/1.0 400 Bad Request");
  print("Bad password");
  exit();
}
$password = md5($ipassword);

$check = check_password($username, $password);

if($check) {
  header('Content-type: application/json');

  $_SESSION['username'] = $username;

  $auth_cookie_val = md5($_SESSION['username']);

  setcookie('LOGIN_AUTH', $auth_cookie_val, 0, '/', 'wwwp.cs.unc.edu', true);

  print(json_encode(true));

  return $check;
} else {
  unset($_SESSION['username']);

  header('HTTP/1.1 401 Unauthorized');
  header('Content-type: application/json');
  print(json_encode(false));
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

    public static function findName($username) {
    $mysqli = User::connect();

    $select = $mysqli->query("select first_name, last_name from proj_Users where username = '" . 
      $mysqli->real_escape_string($username) . "'");

    $info = $select->fetch_array();
    $first_name = $info['first_name'];
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
      //return new User($id, $username, $password);
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
