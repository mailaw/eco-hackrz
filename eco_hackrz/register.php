<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if(!isset($_REQUEST['first_name'])) {
    header("HTTP/1.0 400 Bad Request");
        print("Missing first name");
        exit();
  }
  $first_name = trim($_REQUEST['first_name']);
  if($first_name == "") {
    header("HTTP/1.0 400 Bad Request");
        print("Bad first name");
        exit();
  }
  if(!isset($_REQUEST['last_name'])) {
    header("HTTP/1.0 400 Bad Request");
        print("Missing last name");
        exit();
  }
  $last_name = trim($_REQUEST['last_name']);
  if($last_name == "") {
    header("HTTP/1.0 400 Bad Request");
        print("Bad last name");
        exit();
  }

  if(!isset($_REQUEST['username'])) {
    header("HTTP/1.0 400 Bad Request");
        print("Missing username");
        exit();
  }
  $username = trim($_REQUEST['username']);
  if($username == "") {
    header("HTTP/1.0 400 Bad Request");
        print("Bad username");
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

  $new_user = User::create($username, $password, $first_name, $last_name);

  if($new_user == null) {
    header("HTTP/1.0 500 Server Error");
    print("Server couldn't create new user.");
    exit();
  }

  $user_id = $new_user->getID();

  //Generate JSON encoding of new Todo
  header("Content-type: application/json");
  print($new_user->getJSON());
  exit();
}

class User
{
	private $user_id;
	private $username;
	private $password;
  private $first_name;
  private $last_name;
      private $state;
      private $beekeeper;
  private $gardener;
      private $activist;
  private $composter;

	public static function connect() {
		return new mysqli("classroom.cs.unc.edu",
                   "kimia",
                   "genericpassword",
		           "kimiadb");
	}

	public static function create($username, $password, $first_name, $last_name, $state, $beekeeper, $gardener, $activist, $composter) {
		$mysqli = User::connect();

    $select = $mysqli->query("select user_id from proj_Users where username = '" .
      $mysqli->real_escape_string($username) . "'");

    $info = $select->fetch_array();
    $user_id = $info['user_id'];

    if ($user_id) {
      header("HTTP/1.0 500 Server Error");
      print("This username is already associated with a user.");
      exit();
    } else {
      $s = "insert into proj_Users values ('0', " .
            "'" . $mysqli->real_escape_string($first_name) . "', " .
            "'" . $mysqli->real_escape_string($last_name) . "', " .
          "'" . $mysqli->real_escape_string($state) . "', " .
          "'" . $mysqli->real_escape_string($beekeeper) . "', " .
          "'" . $mysqli->real_escape_string($gardener) . "', " .
          "'" . $mysqli->real_escape_string($activist) . "', " .
          "'" . $mysqli->real_escape_string($composter) . "', " .
            "'" . $mysqli->real_escape_string($username) . "', " .
            "'" . $mysqli->real_escape_string($password) . "')";
      $result = $mysqli->query($s);

      if ($result) {
        $user_id = $mysqli->insert_id;
        return new User($user_id, $username, $password, $first_name, $last_name, $state);
      }
      return null;
    }
	}

	private function __construct($user_id, $username, $password, $first_name, $last_name) {
    $this->user_id = $user_id;
    $this->username = $username;
    $this->password = $password;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->state = $state;
    $this->beekeeper = $beekeeper;
    $this->gardener = $gardener;
    $this->activist = $activist;
    $this->composter = $composter;
  }

  public function getID() {
    return $this->user_id;
  }

  public function getJSON() {
    $json_obj = array('user_id' => $this->user_id,
		      'username' => $this->username,
		      'password' => $this->password,
          'first_name' => $this->first_name,
          'last_name' => $this->last_name,
                      'state' => $this->state,
                      'beekeeper' => $this->beekeeper,
                      'gardener' => $this->gardener,
                      'activist' => $this->activist,
                      'composter' => $this->composter,
                      
                     );
    return json_encode($json_obj);
  }
}

?>
