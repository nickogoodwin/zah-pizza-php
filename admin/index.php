<?php
include('../model/visits.php');
include('../model/employees.php');

$employees = get_employees();


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
} 

switch ($action) { 
    case 'filter_visits':
        $employee = filter_input(INPUT_POST, 'employee');
        
        if ($employee == 'all') {
            header('Location: .');
            break;   
        }

        $visits = get_visits(employee_id: $employee);
        
        include('admin.php');
        break;
    case 'delete_visit':
        $id = filter_input(INPUT_POST, 'id');

        delete_visit($id);
        
        include('admin.php');
        break;
    case 'update_visit':
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $message = filter_input(INPUT_POST, 'message');

        update_visit($id, $name, $email, $phone, $message);

        include('admin.php');
        break;
    default: 
    $visits = get_visits();
    include('admin.php');
}


?>