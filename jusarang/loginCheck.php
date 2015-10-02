<?php
    session_set_cookie_params (0,"/",".kanziw.com");
    ini_set('session.cookie_domain', '.kanziw.com');
    session_start();
    $DB = mysql_connect( 'jusarang.kanziw.com', 'jusarang', 'a' );
    $ret = mysql_select_db( 'jusarang', $DB );

    $sql = "select idx, is_admin, name from staff where id='$_POST[id]' and passwd='$_POST[passwd]'";
    $result = mysql_query( $sql );

    // echo "$result <br>";
    $row = mysql_fetch_array( $result );

    // echo "$row[idx] <br>";
    // echo "$row[is_admin] <br>";
    // echo "$row[name] <br>";
    // echo "$result[1] <br>";
    // echo "$result[2] <br>";
    $count = mysql_num_rows( $result );
    if ( $count == 1 ) {
        $_SESSION['idx'] = $row[idx];
        $_SESSION['is_admin'] = $row[is_admin];
        $_SESSION['name'] = $row[name];
        echo $_SESSION['name'];
        header('location: ./mainNav.php');
    }
    else {
        echo "id : $_POST[id]";
        echo "<br>";
        echo "pw : $_POST[passwd]";
        echo "<br>";
        echo "authentication fail... ";
    }
?>