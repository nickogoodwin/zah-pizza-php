<?php
include('db.php');

function get_visits($id = null, $name = null, $email = null, $employee_id = null) {
    global $db;

    if ($id) {
        $query = 'SELECT * FROM visits_by_employee
                    WHERE id = '.$id;
    } elseif ($name) {
        $query = 'SELECT * FROM visits_by_employee
                    WHERE name LIKE '.$name;
    } elseif ($email) {
        $query = 'SELECT * FROM visits_by_employee
                    WHERE email = '.$email;
    } elseif ($employee_id) {
        if ($employee_id === 'unassigned') {
            $query = 'SELECT * FROM visits_by_employee
                    WHERE employee_id IS NULL';
        } else {
            $query = 'SELECT * FROM visits_by_employee
                    WHERE employee_id = '.$employee_id;
        }
        
    } else {
        $query = 'SELECT * FROM visits_by_employee';
    }
    
    $statement = $db->prepare($query);
    $statement->execute();

    $visits = $statement->fetchAll();
    $statement->closeCursor();
            
    return $visits;
}

function update_visit($id, $name, $email, $phone, $message, $newsletter = false) {
    global $db;
    $query = 'UPDATE visits
                SET name = :name, email = :email, phone = :phone, message = :message, newsletter = :newsletter
                WHERE id = :id';
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':newsletter', $newsletter);
    $statement->execute();
    
    $statement->closeCursor();
}

function add_visit($name, $email, $phone, $message, $newsletter = false) {
    global $db;
    $query = 'INSERT INTO visits
                    (name, email, phone, message, newsletter)
                VALUES
                    (:name, :email, :phone, :message, :newsletter)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':newsletter', $newsletter);

    $statement->execute();
    $statement->closeCursor();
}

function delete_visit($id) {
    global $db;
    $query = 'DELETE FROM visits
                WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}
?>