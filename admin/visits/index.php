<?php
session_start();
require_once('../../util/main.php');
require_once('../../model/database.php');
require_once('../../model/employee/employee_db.php');
require_once('../../model/visit/visit_db.php');
require_once('../../model/employee/employee.php');
require_once('../../model/visit/visit.php');

$employees = EmployeeDB::getEmployees();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
} 

if (!isset($_SESSION['is_admin'])) {
    header("Location: ../");
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
        $visits = VisitDB::getVisits(null, null, null, $employee);
        
        include('visit_list.php');
        break;
    case 'delete_visit':
        $id = filter_input(INPUT_POST, 'id');

        VisitDB::deleteVisit($id);
        
        $visits = VisitDB::getVisits();
        include('visit_list.php');
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

        VisitDB::addVisit($name, $email, $phone, $message, $newsletter);

        $visits = VisitDB::getVisits();
        include('visit_list.php');
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

        VisitDB::updateVisit($id, $name, $email, $phone, $message, $newsletter);

        $visits = VisitDB::getVisits();
        include('visit_list.php');
        break;
    default: 
    $visits = VisitDB::getVisits();
    include('visit_list.php');
}