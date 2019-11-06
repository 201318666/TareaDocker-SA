<h1>Tarea Containers 1/2</h1>
<h4>Conectando a Database MySQL desde php...</h4>
<br>
<form method="post">
    <input type="text" name="nombre" placeholder="Ingresar nombre">
    <br>
    <input type="text" name="apellido" placeholder="Ingresar apellido">
    <br>
    <input type="text" name="departamento" placeholder="Ingresar departamento">
    <input type="submit" name="submit" placeholder="Guardar">
</form>

<?php

function guardar()
{
    $host = 'mysql';
    $user = 'root';
    $pass = 'rootpassword';
    $conn = new mysqli($host, $user, $pass);

    if ($conn->connect_error) {
        die("No se pudo conectar a MySQL: " . $conn->connect_error);
    } 
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $departamento = $_POST["departamento"];
    mysqli_select_db($conn,"tareadocker");
    $sql = "INSERT INTO usuarios (nombre, apellido, departamento) VALUES ('$nombre', '$apellido', '$departamento')";
    if(mysqli_query($conn, $sql)){
        echo "Datos guardados.";
    } else{
        echo "ERROR: No se pudo guardar $sql. " . mysqli_error($conn);
    }
 
    // Close connection
    mysqli_close($conn);
}
if(isset($_POST['submit']))
{
   guardar();
}
?>