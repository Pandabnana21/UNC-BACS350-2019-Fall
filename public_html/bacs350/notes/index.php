<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'notes_views.php';
    require_once 'notes_db.php';


    // List subscriber records
    $list = render_notes(list_notes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Review</a></p>';

    
    // Display the HTML in the page
    $intro = '
      
         
    ';
    $content = "$intro $add_button $list";

    // Show the page
    echo render_page( $content);
?>
