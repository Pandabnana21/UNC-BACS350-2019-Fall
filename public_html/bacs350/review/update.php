<?php

    // Code to define functions
   // require_once 'views.php';
    require_once 'review_views.php';
    require_once 'review_db.php';


    // Pick out the inputs
    $id    = filter_input(INPUT_POST, 'id');
    $designer = filter_input(INPUT_POST, 'designer');
    $url  = filter_input(INPUT_POST, 'url');
    $report  = filter_input(INPUT_POST, 'report');
$score  = filter_input(INPUT_POST, 'score');
$date = filter_input(INPUT_POST, 'date');


      date_default_timezone_set("America/Denver");
$date  = date('Y-m-d g:i:s a');
        

    // Gather user input with a form
    if ($id == '' || $designer == '' || $date == '' || $url == '' || $report == '' || $score == '' ) {
        
        // Form view to add notes
        $id = filter_input(INPUT_GET, 'id');
        $review = get_review($db, $id);
        $edit_review= edit_review_form($review);

        // Display the HTML in the page
        echo render_page('UNC BACS 350', "Edit Note", $edit_review);
    }
    else {
        
        // Add record and return to list
        if (update_review($db, $id, $designer, $url, $date, $report, $score))
        {
            header("Location: index.php");
        }
        else
        {
            echo("Hey");
        }
    }
 
?>
