<?php
$srv = 'localhost';
$user = 'root';
$pas = '';
$bas = 'crud';

/*
$conn = mysqli_connect($srv, $user, $pas, $bas);
if (!$conn){
    die("Connection failed:" . mysqli_connect_error());
}
echo "Conexão feita";
*/
$conn = new mysqli($srv, $user, $pas, $bas);





//$db = new mysqli($srv, $user, $pas, $bas);

/*$db = new mysqli("localhost", "root", "", "crud");
if ($db->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else echo 'Conectado';
*/

?>