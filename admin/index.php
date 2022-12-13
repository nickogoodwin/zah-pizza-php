<?php
session_start();
include('../util/main.php');
require_once('model/database.php');
require_once('model/admin/admin_db.php');

include('view/admin/header.php');
include('view/admin/nav.php');

// function guessing_game($guess) {
//   if (empty($guess)) {
//     throw new Exception("You didn't enter a value silly.");
//   }
//   if (!is_numeric($guess)) {
//     throw new Exception('Value must be a number.');
//   }
//   if ($guess < 0 || $guess > 10) {
//     throw new Exception('Value must be a number between 1 and 10');
//   }
//   return $guess;
// }

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
      $action = 'admin';
    }
} 

if (!isset($_SESSION['is_admin'])) {
  $action = 'login';
}

switch($action) {
  case 'login':
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    if (isAdmin($email, $password)) {
        $_SESSION['is_admin'] = true;
        // redirect logged in user to default page
        header("Location: .");
    } else {
        if ($email == NULL && $password == NULL) {
            $message = 'You must login to view this page.';
        } else {
            $message = 'Invalid credentials.';
        }
        include('login.php');
    }
    break;
  case 'register':
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    if ($email == null || $password == null) {
        $message = "please enter valid credentials";
    } else {
        add_admin($email, $password, $firstName, $lastName);
        $message = "User added successfully";
    }
    include('login.php');
    break;
  case 'admin':
    include('admin.php');
    break;
  case 'logout':
    $_SESSION = [];
    session_destroy();
    header("Location: .");
    break;
  // case 'game':
  //   $message = "";
  //   $error_message = "";
  //   $gamer = true;

  //   try {
  //     $guess = filter_input(INPUT_POST, 'guess');
  //     guessing_game($guess);
  //     $message = "Your guess of \"".$guess."\" was in fact between 1 and 10. Good job!";
  //     include('admin.php');
  //   } catch (Exception $e) {
  //     $error_message = $e->getMessage();
  //     include('errors/index.php');
  //   }
  //   break;
}
?>


<?php
include('view/admin/footer.php')
?>



