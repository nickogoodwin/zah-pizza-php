<?php
function add_admin($email, $password, $firstName, $lastName) {
    $db = DB::getDB();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO users (email, password, firstName, lastName)
              VALUES (:email, :password, :firstName, :lastName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->execute();
    $statement->closeCursor();
}

function isAdmin($email, $password) {
    $db = DB::getDB();
    $query = 'SELECT password FROM users
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    
    if ($row === false) { return false; } 
    else {
        $hash = $row['password'];
        return password_verify($password, $hash);
    }
}

//add admin user if it doesn't exist
function populateAdmin() {
    echo "populateAdmin run";
    $db = DB::getDB();
    $query = 'SELECT * FROM users
                WHERE firstName = "admin"';
    $statement = $db->prepare($query);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();

    if (!$row) {
        add_admin('admin@zahpizza.com', 'Pa55w0rd', 'Admin', 'User');
    }
}
?>