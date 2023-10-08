<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alumnos</title>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    <?php
    $servername = "mysql"; // Nombre del servicio MySQL en el archivo docker-compose.yml
    $username = "root";
    $password = "root1"; // La contraseña que estableciste en docker-compose.yml
    $dbname = "prueba";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consultar datos de la tabla de alumnos
    $sql = "SELECT id, apellidos, nombres, dni FROM alumnos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Apellidos</th><th>Nombres</th><th>DNI</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["apellidos"]."</td><td>".$row["nombres"]."</td><td>".$row["dni"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 resultados";
    }
    $conn->close();
    ?>
</body>
</html>
