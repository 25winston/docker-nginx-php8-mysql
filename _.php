<?php

// $hostName = "rawin.win";
// $userName = "rawin";
// $password = "xxx";
// $dbName = "rawin_blog";
// $conn = new mysqli($hostName, $userName, $password, $dbName);
// if ($conn) {
//     echo "connected";
// } else {
//     echo "not connected";
// }

// $serverName = "172.16.1.53 "; //serverName\instanceName
// $connectionInfo = array("Database" => "bemis", "UID" => "superadmin", "PWD" => "Innovisor#123");
// $conn = sqlsrv_connect($serverName, $connectionInfo);

// if ($conn) {
//     echo "Connection established.<br />";
// } else {
//     echo "Connection could not be established.<br />";
//     die(print_r(sqlsrv_errors(), true));
// }


echo 'Default Timezone: ' . date_default_timezone_get();
echo '<br>';
echo 'Date: ' . date('d-m-Y H:i:s');
echo '<br>';
phpinfo();