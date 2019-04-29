<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=STOCK', 'admin', 'admin');
    foreach($dbh->query('SELECT * from produit') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>