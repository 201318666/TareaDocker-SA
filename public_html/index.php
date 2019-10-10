<h1>Tarea Containers 1/2</h1>
<h4>Conectando a Database MySQL desde php...</h4>
<?php 
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("No se pudo conectar a MySQL: " . $conn->connect_error);
} 
echo "Conexion a MySQL exitosa!";
?>