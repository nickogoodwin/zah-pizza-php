<?php
class VisitDB {
    public static function getVisits($id = null, $name = null, $email = null, $employee_id = null) {
        $db = DB::getDB();

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

    public static function updateVisit($id, $name, $email, $phone, $message, $newsletter = false) {
        $db = DB::getDB();
        $query = "UPDATE visits
                    SET name = '$name', email = '$email', phone = '$phone', message = '$message', newsletter = '$newsletter'
                    WHERE id = '$id'";
        $db->exec($query);
    }

    public static function addVisit($name, $email, $phone, $message, $newsletter = false) {
        $db = DB::getDB();
        
        $query = "INSERT INTO visits
                    (name, email, phone, message, newsletter)
                VALUES
                    ('$name', '$email', '$phone', '$message', '$newsletter')";
        $db->exec($query);

    }

    public static function deleteVisit($id) {
        $db = DB::getDB();

        $query = "DELETE FROM visits
                WHERE id = '$id'";
        $db->exec($query);
    }
}
?>