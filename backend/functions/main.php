<?php
class Main{
//Check if admin user is logged in 
public function logged_in(){
    return (isset($_SESSION['loggedin'])) ? true : false;
}

//fetch all notes
public function getAllNotes(){
    global $pdo;

    $query = $pdo->prepare('SELECT * FROM notes Order by noteID LIMIT 3');
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}
}
?>