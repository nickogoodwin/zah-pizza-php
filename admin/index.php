<?php
include('../model/visits.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
} 

switch ($action) { 
    case 'delete_visit':
        $id = filter_input(INPUT_POST, 'id');
        delete_visit($id);
        header('Location: .');
        break;
    case 'update_visit':
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $message = filter_input(INPUT_POST, 'message');
        update_visit($id, $name, $email, $phone, $message);
        header('Location: .');
        break;
    default: 
        $visits = get_visits();
        include('admin.php');
}


?>