<?php
// Inicializamos las variables de error
$nombreError = $emailError = "";
$nombre = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar el campo de nombre
    if (empty($_POST["nombre"])) {
        $nombreError = "El nombre es requerido";
    } else {
        $nombre = test_input($_POST["nombre"]);
        // Verificar si el nombre solo contiene letras y espacios
        if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
            $nombreError = "Solo se permiten letras y espacios en blanco";
        }
    }
  
    // Validar el campo de correo electrónico
    if (empty($_POST["email"])) {
        $emailError = "El correo electrónico es requerido";
    } else {
        $email = test_input($_POST["email"]);
        // Verificar si el formato del correo electrónico es válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Formato de correo electrónico inválido";
        }
    }
}

// Función para limpiar y validar datos
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Formulario de Validación</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Nombre: <input type="text" name="nombre">
  <span class="error">* <?php echo $nombreError;?></span>
  <br><br>
  Correo Electrónico: <input type="text" name="email">
  <span class="error">* <?php echo $emailError;?></span>
  <br><br>
  <input type="submit" name="submit" value="Enviar">
</form>

<?php
echo "<h2>Datos Ingresados:</h2>";
echo "Nombre: " . $nombre;
echo "<br>";
echo "Correo Electrónico: " . $email;
?>

