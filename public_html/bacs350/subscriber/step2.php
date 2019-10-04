<h1>Subscribers Database </h1>




<?php

    // Connect to the subscribers database at Bluehost
    require 'subscriber.php';


    // Get a list of subscribers records
    $subscribers = query_subscribers($db);


    // Build a list of subscribers in HTML
    $list = render_subscriber_list($subscribers);

    echo $list;
    
?>

<p><b>Success !!</b></p>
