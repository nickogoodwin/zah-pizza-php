<?php
session_start();
require_once('../../util/main.php');
require_once('model/database.php');
require_once('model/user/user_db.php');
require_once('model/user/user.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
} 

if (!isset($_SESSION['is_admin'])) {
    header("Location: ../");
}


switch ($action) { 
    case 'filter':
        $user_id = filter_input(INPUT_POST, 'user');
        
        if ($user_id == 'all') {
            header('Location: .');
            break;   
        }
        $users = UserDB::getUsers($user_id, null, null);
        
        include('user_list.php');
        break;
    case 'delete':
        $id = filter_input(INPUT_POST, 'id');
        UserDB::deleteUser($id);
        
        $users = UserDB::getUsers();
        include('user_list.php');
        break;
    case 'add':
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        UserDB::addUser($email, $password, $firstName, $lastName);

        $users = UserDB::getUsers();
        include('user_list.php');
        break;
    case 'update':
        $id = filter_input(INPUT_POST, 'id');
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $email = filter_input(INPUT_POST, 'email');
        UserDB::updateUser($id, $email, $firstName, $lastName);
        
        $users = UserDB::getUsers();
        include('user_list.php');
        break;
    default: 
        $users = UserDB::getUsers();
        include('user_list.php');
}


?>