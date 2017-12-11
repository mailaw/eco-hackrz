<!DOCTYPE>
<html>
<head>
  <title>eco-hackrz</title>
  <link rel="icon" href="small_checklist.png">
  <link href="landing.css" type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
  <script type="text/javascript" src="jquery-3.2.1.js"></script>
  <script type="text/javascript" src="landing.js"></script>
</head>

<body>
  <?php
  session_start();
  if (!isset($_COOKIE['LOGIN_AUTH']) ||($_COOKIE['LOGIN_AUTH'] != md5($_SESSION['username']))) {
  header('Location: authenticate.html');
  exit();
}
?>
<div id="header_wrapper">
  <div id="topPic"><a href="landing.php"><img class="resize" src="hackplanet.png" alt="eco-hackrz"></a></div>
  <div id="topLeft"><h1 class="name">&nbsp;eco-hackrz</h1></div>
  <div id="welcome">
    <h1>Welcome, <?php
    session_start();
    require_once('User.php');
    $first_name = findFirstName();
    $last_name = findLastName();

    print($first_name);
    print(" ");
    print($last_name)?>!</h1></div>
    <form id="logout_form">
        <input class="button" type="submit" id="logout" value="logout">
    </form>
</div>

<br>

  <div id="newEntry" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h1>Create a new Entry</h1>
      <form id='item_form' name="item_form">
        Category:<br>
     <select name="category">
         <option value="one">waste</option>
         <option value="two">transport</option>
         <option value="three">cultivation</option>
         <option value="four">resources</option>
       </select>
     <br><br>
       
     Type:<br>
       <input type="radio" name="obs" value="observation" > Observation <br>
         <input type="radio" name="act" value="action"> Action <br>
     <br>
       
       Impact:<br>
       <input type="radio" name="good" value="positive" > Positive <br>
         <input type="radio" name="bad" value="negative"> Negative <br>
     <br>
       
       Date:<br>
       <input type="date" name="when">
     <br><br>
       
       Location (Zip):<br>
       <input type="zip" name="zip">
     <br><br>
       
       Notes:<br>
       <textarea name="notes" rows="10" cols="30"> Any notes you want to save about this entry
       </textarea>
    <br>
        <input class="button" type="submit" value="Create a Group">
      </form>
    </div>
    </div>

</body>
</html>
