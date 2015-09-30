<?php
    $html = file_get_html('http://www.google.com/');
    // Dumps the internal DOM tree back into string
    $str = $html;

    // Print it!
    echo $str;
?>


