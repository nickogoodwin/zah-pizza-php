<?php
include('db.php');

function get_employees($id = null, $name = null, $position = null) {
    global $db;

    if ($id) {
        $query = 'SELECT * FROM employees
                    WHERE id = '.$id;
    } elseif ($name) {
        $query = 'SELECT * FROM employees
                    WHERE name LIKE '.$name;
    }  elseif ($position) {
        $query = 'SELECT * FROM employees
                    WHERE name LIKE '.$position;
    } else {
        $query = 'SELECT * FROM employees';
    }
    
    $statement = $db->prepare($query);
    $statement->execute();

    $employees = $statement->fetchAll();
    $statement->closeCursor();
            
    return $employees;
}

function update_employee($id = null, $name = null, $position = null) {
    global $db;
    $query = 'UPDATE employees
                SET name = :name, position = :position
                WHERE id = :id';
    $statement = $db->prepare($query);
        
    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':position', $position);
    $statement->execute();
    
    $statement->closeCursor();
}

function add_employee($name, $position) {
    global $db;
    $query = 'INSERT INTO employees
                    (name, position)
                VALUES
                    (:name, :position)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $position);

    $statement->execute();
    $statement->closeCursor();
}

function delete_employee($id) {
    global $db;
    $query = 'DELETE FROM employees
                WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}
?>