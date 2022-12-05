<?php
include('../util/main.php');
include('view/admin/header.php');
include('view/admin/nav.php');

function guessing_game($guess) {
  if (empty($guess)) {
    throw new Exception("You didn't enter a value silly.");
  }
  if (!is_numeric($guess)) {
    throw new Exception('Value must be a number.');
  }
  if ($guess < 0 || $guess > 10) {
    throw new Exception('Value must be a number between 1 and 10');
  }
  return $guess;
}

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
} 

switch($action) {
  case 'game':
    $message = "";
    $error_message = "";
    $gamer=true;

    try {
      $guess = filter_input(INPUT_POST, 'guess');
      guessing_game($guess);
      $message = "Your guess of \"".$guess."\" was in fact between 1 and 10. Good job!";
      include('admin.php');
    } catch (Exception $e) {
      $error_message = $e->getMessage();
      include('errors/index.php');
    }
    break;
  default:
    $message = "";
    $gamer = false;
    include('admin.php');
}
?>


<?php
include('view/admin/footer.php')
?>



