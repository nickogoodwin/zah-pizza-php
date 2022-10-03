<?php
include('db.php');

function get_visits() {
    global $db;
    $query = 'SELECT * FROM visits_by_employee';
    $statement = $db->prepare($query);
    $statement->execute();

    $visits = $statement->fetchAll();
    $statement->closeCursor();
            
    return $visits;
}

function update_visit($id, $name, $email, $phone, $message) {
    global $db;
    $query = 'UPDATE visits
                SET name = :name, email = :email, phone = :phone, message = :message
                WHERE id = :id';
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':message', $message);
    $statement->execute();
    
    $statement->closeCursor();
}

function add_visit($name, $email, $phone, $message, $newsletter) {
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