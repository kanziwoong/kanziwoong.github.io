<?php
    session_start();
    $DB = mysql_connect( 'jusarang.kanziw.com', 'jusarang', 'a' );
    $ret = mysql_select_db( 'jusarang', $DB );

    $sql = "select * from user where id='$_POST[id]' and pw=password('$_POST[pw]')";
    $result = mysql_query( $sql );

    $count = mysql_num_rows( $result );
    if ( $count > 0 ) {
        $_SESSION["id"] = $_POST[id];
        header('location: ./login.php');
    }
    else {
        echo "authentication fail... ";
    }
?>