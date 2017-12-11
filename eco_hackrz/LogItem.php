<?php

session_start();

$user_id = User::GetIDofUser($_SESSION['username']);

$path_components = explode('/', $_SERVER['PATH_INFO']);

  $new_item = LogItem::create($item_id, $user_id, $waste, $transport, $cultivation, $resources, $p_action, $n_action, $date_input, $notes);

   if ($new_item == null) {
    header("HTTP/1.0 500 Server Error");
    print("Server couldn't create new to do item.");
    exit();
  } else {
    header("Content-type: application/json");
    print($new_item->getJSON());
    exit();
  }

}

class LogItem
{
	private $item_id;
	private $user_id;
	private $waste;
	private $transport;
	private $cultivation;
    private $resources;
    private $p_action;
    private $n_action;
    private $date_input;
    private $notes;

	public static function connect() {
    return new mysqli("classroom.cs.unc.edu",
                   "kimia",
                   "genericpassword",
               "kimiadb");
  }

  public static function create($item_id, $user_id, $waste, $transport, $cultivation, $resources, $p_action, $n_action, $date_input, $notes) {
    $mysqli = LogItem::connect();

    $query = "insert into proj_Log_Items values ('0', " .
    	intval($user_id) . ", " .
    	intval($waste) . ", '" .
    	intval($transport) . "', '" .
        intval($cultivation) . "', '" .
        intval($resources) . "', '" .
        intval($p_action) . "', '" .
        intval($n_action) . "', '" .
    	$date_input . "', '" .
    	$notes . "')";
      $result = $mysqli->query($query);

    if ($result) {
      $id = $mysqli->insert_id;
      return new LogItem($item_id, $user_id, $waste, $transport, $cultivation, $resources, $p_action, $n_action, $date_input, $notes);
    }
    return null;
  }
  private function __construct($item_id, $user_id, $waste, $transport, $cultivation, $resources, $p_action, $n_action, $date_input, $notes) {
    $this->item_id = $item_id;
    $this->user_id = $user_id;
    $this->waste = $waste;
    $this->transport = $transport;
    $this->cultivation = $cultivation;
    $this->resources = $resources;
    $this->p_action = $p_action;
    $this->n_action = $n_action;
    $this->date_input = $date_input;
    $this->notes = $notes;
  }

  public function getID() {
    return $this->user_id;
  }
  public function getJSON() {
    $json_obj = array('item_id' => $this->item_id,
        'user_id' => $this->user_id,
        'waste' => $this->waste,
        'transport' => $this->transport,
        'cultivation' => $this->cultivation,
        'resources' => $this->resources,
        'p_action' => $this->p_action,
        'n_action' => $this->n_action,
        'date_input' => $this->date_input,
        'notes' => $this->notes);
    return json_encode($json_obj);
  }
}

class User
{
  private $id;
  private $username;
  private $password;

  public static function connect() {
    return new mysqli("classroom.cs.unc.edu",
                   "kimia",
                   "genericpassword",
               "kimiadb");
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

  public static function find($username, $password) {
    $mysqli = User::connect();

    $select = $mysqli->query("select user_id from proj_Users where username = '" .
      $mysqli->real_escape_string($username) . "' and password = '" .
      $mysqli->real_escape_string($password) . "'");

    $info = $select->fetch_array();
    $user_id = $info['user_id'];

    if ($uesr_id) {
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

    $json_obj = array('uesr_id' => $this->user_id,
          'username' => $this->username,
          'password' => $this->password);
    return json_encode($json_obj);
  }
}

?>
