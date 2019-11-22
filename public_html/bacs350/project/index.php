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
              <button>  <a href="../../">Setup Web Hosting</a> </button>
            </li>
            <li>
               <button> <a href="02">Page Template</a>
            </li>
            <li>
               <button> <a href="03">Superhero Cards PHP</a> </button>
            </li>
            <li>
              <button>  <a href="../subscriber">sql Subscriber list</a> </button>
            </li>
             <li>
               <button> <a href="../planner">Project #4 - Planner Sheet</a> </button>
            </li>
            <li>
              <button>  <a href="../superhero">Superhero</a> </button>
            </li>
            <li>
               <button> <a href="../notes">Notes App</a> </button>
            </li>
             <li>
              <button>  <a href="../slides">Slideshow Creator</a> </button>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
