<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Mitch's Brain";
    
    $content = '
       
        <p> 
Hey        </p>
        <p> 
            My Class Assignments
        </p>
        <p> 
Here are some Links        </p>
        
        <ul>
            <li>
                <a href="https://shrinking-world.com/unc/bacs350">Class website</a>
            </li>
            <li>
                <a href="pattern">Design Patterns</a>
            </li>
            <li>
                <a href="project">Projects</a>
            </li>
              <li>
                <a href="skills">Skills</a>
            </li>
        </ul>

        
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
