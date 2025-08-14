<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $action = $_POST["action"];
  if ($action == "register") {
    register();
  }
  elseif ($action == "login")
  {
    echo $action;
    login();
  }
  elseif ($action == "verify")
  {
    verify();
  }
  elseif ($action == "changing"){
    changing();
  }
}
elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../../account.php");
    exit;
  }
}

function changing(){
  $email = $_POST["email"];
  $passwd = $_POST["password"];
  $activation_code = $_POST["activation_code"];

  $conn = include 'connect.php';
  $sql = "select email from users where email='$email' AND activation_code = '$activation_code'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
    $sql = "update users SET passwd = '$passwd' where email='$email' AND activation_code = '$activation_code'";
    $updateResult = $conn->query($sql);
    if ($updateResult) {
      $info =  "Password changed successful!";
    } else {
      $info =  "Password changed failed!";
    }
    $conn->close();
    header("Location: ../../information.php?message=$info");
  }
}

function verify(){
  $email = $_POST["email"];
  $conn = include 'connect.php';

   $sql = "select email, activate, activation_code from users where email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
      $row = $result->fetch_assoc();
      if ($row["activate"] == True){
        $info = "The email of changing your password has been sent your email.";
        send_change_emails($row["email"], $row["activation_code"]);
      }
      elseif($row["activate"] == FALSE){
        $info = "The email isn't activated. The activate will send your email.";
        send_emails($row["email"], $row["activation_code"]);
      }
    }
    else {
      $info = "The email isn't registered.";
    }
    header("Location: ../../information.php?message=$info");
}

function login() {
  $email = $_POST["email"];
  $passwd = $_POST["password"];
  $conn = include 'connect.php';

  $sql = "select * from users where email='$email' and passwd='$passwd'";
  $result = $conn->query($sql);
  if ($result->num_rows == 0){
    $conn -> close();
    header("Location: ../../login.php?message=unsuccessful");
  }
  else {
    $_SESSION['email'] = $email;
    // $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $conn -> close();
    header('Location: ../../account.php');
  }
}

function register() {
    $conn  = include 'connect.php';
    $email = $_POST["email"];
    $organization = $_POST["organization"];
    $supervisor = $_POST["supervisor"];
    $passwd = $_POST["password"];
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];

    $sql = "select email, activate, activation_code from users where email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
      $row = $result->fetch_assoc();
      if ($row["activate"] == True){
        $info = "The email has already been registered.";
      }
      elseif($row["activate"] == FALSE){
        $info = "The email isn't activated. The activate will send your email";
        send_emails($row["email"], $row["activation_code"]);
      }
    }
    else{
      $activation_code = md5(uniqid(rand(), true));
      $sql = "INSERT INTO users (email, passwd, first_name, last_name, organization, supervisor, activation_code) VALUES ('$email', '$passwd', '$first_name', 
      '$last_name', '$organization', '$supervisor', '$activation_code')";
      if ($conn->query($sql) === TRUE) {
        $info = "Registration successful, The activate email will send your email right now.";
        send_emails($email, $activation_code);
      } else {
        $info =  "Error: Registration failed. Please connet the web teams";
      }
    }
    $conn->close();
    header("Location: ../../information.php?message=$info");
}

function get_user_information($email) {
  try{
    // $email = $_SESSION['email'];
    $conn = include 'connect.php';
    $sql = "select email, first_name, last_name, organization, supervisor from users where email = '$email'";
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
    $conn->close();
    return $result;
  }
  catch (Exception $e) {
    return null;
}
}

function send_emails($mailReceiver, $activation_code){
  $config = include 'config.php';
  include 'mail.php';
  $mailSubject = 'Welcome to register the Building3D dataset.';
  $activation_link = "http://building3d.ucalgary.ca/assets/php/activate.php?email=$mailReceiver&code=$activation_code";
  $mailContent = "Welcome to register the Building3D dataset. <p>Please click the link to activate your account: $activation_link</p> <p></p><p></p> <p>Regards</p><p><I><b>Building3D Team</b></I></p>";
  send_email($to=$mailReceiver, $subject=$mailSubject, $content=$mailContent);
}

function send_change_emails($mailReceiver, $activation_code){
  $config = include 'config.php';
  include 'mail.php';
  $mailSubject = 'Change your password';
  $activation_link = "http://building3d.ucalgary.ca/changing.php?email=$mailReceiver&code=$activation_code";
  $mailContent = "Chang your password. <p>Please click the link to change your password: $activation_link </p> <p></p><p></p> <p>Regards</p><p><I><b>Building3D Team</b></I></p>" ;
  send_email($to=$mailReceiver, $subject=$mailSubject, $content=$mailContent);
}
?>