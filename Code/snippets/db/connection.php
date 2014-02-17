<?php
try {
    
    $dbh = new PDO( 'mysql:host=localhost;dbname=boletina_boletin_axa', 'boletina_idea', '1deadisen0' );
    $dbh->exec("SET CHARACTER SET utf8");
} catch ( PDOException $e ){
    
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}