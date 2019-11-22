<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'BACS 350';
    
    $page_title = "Mitch's Brain";
    
    $content = '
       

        <p> 
            My Class Assignments:
        </p>
 
        
        
              <h2>  <a href="https://shrinking-world.com/unc/bacs350">Class website</a> </h2>
            
            
               <h2> <a href="project">Projects</a> </h2>
       
            
               <h2> <a target="github.com/Pandabnana21/UNC-BACS350-2019-Fall" href="https://github.com/Pandabnana21/UNC-BACS350-2019-Fall" >My Repository </a> </h2>
        
           
              <h2>  <a href="pattern">Design Patterns</a> </h2>
          
            
          
               <h2> <a href="skills">Skills</a> </h2>
          
             
      

        
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
