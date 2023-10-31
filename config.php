<?php
    $user = "myusername";
    $password = "mypassword";
    $ODBCConnection = odbc_connect("DRIVER={Devart ODBC Driver for SQLite};Direct=True;Database=mydatabase;String Types= Unicode", $user, $password);

?>