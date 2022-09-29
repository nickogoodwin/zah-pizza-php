<?php
include('db.php');

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
?>