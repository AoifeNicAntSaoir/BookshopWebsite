<?php
$dbcnx = mysqli_connect("sql8.freesqldatabase.com", "sql8126604", "DHjsYWPBpf", "sql8126604"); 
//checkconnection
if (mysqli_connect_errno($dbcnx ))
{echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();
}

?>