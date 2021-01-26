<html>
<head><link rel="stylesheet" href="styles.css"></head>
    <style>background: radial-gradient(#f7b5b5, #6498fc);
</style>
<h1>Subscriber Database</h1>

<p>
    <a href="index.php">Subscriber List Code</a>
</p>

<h2>CONNECTED to Subscriber Database</h2>

<?php

    // Connect subscriber database
    $port = '3306';
    $dbname = 'bearsnin_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'bearsnin';
    $password = '123456';
    
    echo "<h3>$db_connect</h3>";
    
    $db = new PDO($db_connect, $username, $password);

    echo "<h2>CONNECTED</h2>";


    // Get a list of records into an array
    $query = "SELECT * FROM subscribers";
    $statement = $db->prepare($query);
    $statement->execute();
    $subscribers = $statement->fetchAll();

    echo "<h2>QUERY DONE</h2>";

    // Create an HTML list on the output
    echo '<ul>';
    foreach($subscribers as $row) {
        echo "<li><b>$row[name]</b> - email: $row[email]</li>";
    }
    echo '</ul>';

  

?>
</html>
