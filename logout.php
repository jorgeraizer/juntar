<?php
session_start();

// Destruir a sessão
session_unset();
session_destroy();

// Redirecionar para a página de login
header("Location: pagina_inicial.php");
exit;
?>
