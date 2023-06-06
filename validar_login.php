<?php
include_once 'models/conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["correo_electronico"];
    $password = $_POST["contrasena"];
    
    if (isset($email) && isset($password)) {
        $stmt = $con->prepare("SELECT * FROM usuarios WHERE correo_electronico = ? AND activo = 1");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();
    
        if ($usuario) {
            // Verificar si la contraseña ingresada coincide con la contraseña almacenada en la base de datos
            if (password_verify($password, $usuario["contrasena"])) {
                // Iniciar sesión
                session_start();
                $_SESSION["id_usuario"] = $usuario["id_usuario"];
                $_SESSION["sistema"] = "9q274t9q3y4598978AQY4";
                $_SESSION['correo_electronico'] = $usuario['correo_electronico'];
                $_SESSION['anio'] = date('Y');

    
                // Redirigir al usuario a la página de inicio o a su perfil de usuario
                header("Location: index.php");
                exit();
            } else {
                // La contraseña ingresada es incorrecta
                print $mensajeError = "La contraseña ingresada es incorrecta";

            }
        } else {
            // El correo electrónico ingresado no existe en la base de datos
            print $mensajeError = "El correo electrónico ingresado no existe en la base de datos";
        }
    } else {
        // El correo electrónico y/o la contraseña no fueron ingresados
        print $mensajeError = "Debes ingresar el correo electrónico y la contraseña";
    }
    
}



?>