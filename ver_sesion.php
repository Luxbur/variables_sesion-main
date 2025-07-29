<?php
// Iniciar la sesión
session_start();
?>

<?php if (!empty($_SESSION)): ?>
            <div class="sesion-info">
                <h2>Variables encontradas:</h2>
                <ul>
                    <?php foreach ($_SESSION as $clave => $valor): ?>
                        <li>
                            <strong><?php echo htmlspecialchars($clave); ?>:</strong> 
                            <?php echo htmlspecialchars($valor); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                
                <p><strong>Total de variables:</strong> <?php echo count($_SESSION); ?></p>
                <p><strong>ID de sesión:</strong> <?php echo session_id(); ?></p>
            </div>
        <?php else: ?>
            <div class="no-sesion">
                <h2>No hay variables de sesión</h2>
                <p>Aún no se han creado variables de sesión. Puedes crear algunas llenando el formulario.</p>
            </div>
        <?php endif; ?>