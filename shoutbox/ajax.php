<?php
// File: ajax.php
    // Ajax refresh hits
    if(isset($_GET['refresh'])){
        // Uses the get_page_views() function which takes an ID and retreives that page view count. The ID is passed by the AJAX script.
        if($_GET['refresh'] == 'hits') echo get_page_views($_GET['id']);
    };
?>