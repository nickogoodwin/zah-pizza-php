<?php
require_once('../../util/main.php');
require_once('../../model/database.php');
require_once('../../model/employee_db.php');
require_once('../../model/employee.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
} 

switch ($action) { 
    case 'filter':
        $employee_id = filter_input(INPUT_POST, 'employee');
        
        if ($employee_id == 'all') {
            header('Location: .');
            break;   
        }
        //PHP 8
        // $employees = getEmployees(employee_id: $employee);

        //PHP 7
        $employees = EmployeeDB::getEmployees($employee_id, null, null);
        
        include('employee_list.php');
        break;
    case 'delete':
        $id = filter_input(INPUT_POST, 'id');
        EmployeeDB::deleteEmployee($id);
        
        $employees = EmployeeDB::getEmployees();
        include('employee_list.php');
        break;
    case 'add':
        $name = filter_input(INPUT_POST, 'name');
        $position = filter_input(INPUT_POST, 'position');
        EmployeeDB::addEmployee($name, $position);

        $employees = EmployeeDB::getEmployees();
        include('employee_list.php');
        break;
    case 'update':
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $position = filter_input(INPUT_POST, 'position');
        EmployeeDB::updateEmployee($id, $name, $position);
        
        $employees = EmployeeDB::getEmployees();
        include('employee_list.php');
        break;
    default: 
        $employees = EmployeeDB::getEmployees();
        include('employee_list.php');
}


?>