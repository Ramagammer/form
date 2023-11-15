<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1) {
        $name = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, telefono, email, fecha_reg) VALUES ('$name','$telefono','$email','$fechareg')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            header("Location: registro_exitoso.php");
            exit();
        } else {
           header("Location: registro_fallido.php");
            exit();
        }
    } else {
        ?>
        <h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
   }  
}
?>





