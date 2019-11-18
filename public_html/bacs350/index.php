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
              <h2>  <a href="https://shrinking-world.com/unc/bacs350">Class website</a> </h2>
            </li>
            <li>
               <h2> <a href="project">Projects</a> </h2>
            </li>
            <li>
               <h2> <a href="https://github.com/Pandabnana21/UNC-BACS350-2019-Fall">My Repository </a> </h2>
            </li>
            <li>
              <h2>  <a href="pattern">Design Patterns</a> </h2>
            </li>
            
              <li>
               <h2> <a href="skills">Skills</a> </h2>
            </li>
             
        </ul>

        
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
