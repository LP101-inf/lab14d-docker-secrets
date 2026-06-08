<?php
$db_password = trim(file_get_contents('/run/secrets/db_password'));
$mysqli = new mysqli('mysql', 'wordpress', $db_password, 'testdb');

if ($mysqli->connect_error) {
    die("Błąd połączenia: " . $mysqli->connect_error);
}
echo "Połączono z bazą testdb.<br>";
$result = $mysqli->query("SHOW TABLES");
while($row = $result->fetch_array()) {
    echo $row[0] . "<br>";
}
$mysqli->close();
?>