<?php

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB', 'typperdb');

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB) or die ('Não conectou ao banco de dados!');

?>