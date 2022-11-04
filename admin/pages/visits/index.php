<?php
include('../../../model/visits.php');
include('../../../model/employees.php');

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
        //PHP 8
        // $visits = get_visits(employee_id: $employee);

        //PHP 7
        $visits = get_visits(null, null, null, $employee);
        
        include('visits.php');
        break;
    case 'delete_visit':
        $id = filter_input(INPUT_POST, 'id');

        delete_visit($id);
        
        $visits = get_visits();
        include('visits.php');
        break;
    case 'add_visit':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $message = filter_input(INPUT_POST, 'message');
        $newsletter = filter_input(INPUT_POST, 'newsletter');
        if (!$newsletter) {
            $newsletter = false;
        } else {
            $newsletter = true;
        }

        add_visit($name, $email, $phone, $message, $newsletter);

        $visits = get_visits();
        include('visits.php');
        break;
    case 'update_visit':
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $message = filter_input(INPUT_POST, 'message');
        $newsletter = filter_input(INPUT_POST, 'newsletter');
        if (!$newsletter) {
            $newsletter = false;
        } else {
            $newsletter = true;
        }

        update_visit($id, $name, $email, $phone, $message, $newsletter);

        $visits = get_visits();
        include('visits.php');
        break;
    default: 
    $visits = get_visits();
    include('visits.php');
}


?>