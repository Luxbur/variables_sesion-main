<?php
// Iniciar la sesión - SIEMPRE debe ir al principio
session_start();

// Verificar si se enviaron datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardar los datos del formulario en variables de sesión
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['edad'] = $_POST['edad'];
    $_SESSION['fecha_registro'] = date('Y-m-d H:i:s');
}
?>
<?php if (isset($_SESSION['nombre'])): ?>

<?php echo $_SESSION['nombre']; ?></li>
<?php echo $_SESSION['email']; ?></li>
<?php echo $_SESSION['edad']; ?> años</li>
<?php echo $_SESSION['fecha_registro']; ?></li>
<?php echo session_id(); ?></p>

            <?php else: ?>
            <p>No hay datos de sesión. <a href="formulario.html">Vuelve al formulario</a></p>
        <?php endif; ?>