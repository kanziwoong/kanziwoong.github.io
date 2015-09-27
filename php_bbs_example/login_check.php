<?php

    echo "id: $_POST[id]";
    echo "<br>";
    echo "pw: $_POST[pw]";

    $DB = mysql_connect( 'jusarang.kanziw.com', 'jusarang', 'a' );
    $ret = mysql_select_db( 'jusarang', $DB );

    $sql = "select * from user";
    $result = mysql_query( $sql );

    while( $row = mysql_fetch_array( $result, MYSQL_NUM ) ) {
      echo "num: $row[0] name: $row[1] id: $row[2] pw: $row[3]";
      echo "<br>";
    }

?>