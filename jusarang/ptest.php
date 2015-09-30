<?php
    error_reporting(E_ALL);
    include_once('../simplehtmldom/simple_html_dom.php');
    $html = file_get_html('index.html');
    // Dumps the internal DOM tree back into string
    $str = $html;

    // Print it!
    // echo $str;
    echo $html
?>


