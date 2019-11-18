<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "My Projects";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            Projects in BACS 350.
        </p>
        
        <ul>
            <li>
                <a href="../../">Setup Web Hosting</a>
            </li>
            <li>
                <a href="02">Page Template</a>
            </li>
            <li>
                <a href="03">Superhero Cards PHP</a>
            </li>
            <li>
                <a href="../subscriber">sql Subscriber list</a>
            </li>
             <li>
                <a href="../planner">Project #4 - Planner Sheet</a>
            </li>
            <li>
                <a href="../superhero">Superhero</a>
            </li>
            <li>
                <a href="../notes">Notes App</a>
            </li>
             <li>
                <a href="../slides">Slideshow Creator</a>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
