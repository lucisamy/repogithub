<?php
$comandos = ['git pull','git submodule sync','git submodule update'];
$output='';
foreach($comandos AS $comando) {
    // Ejecución de los comandos
    $tmp = shell_exec($comando);
    //si queremos mostrar la ejecución:
    $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$comando}\n</span>";
    $output .= htmlentities(trim($tmp)) . "\n";
}
// Creamos el código html por si se quisiera ejecutar el deploy manualmente
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>SCRIPT PARA DESPLEGAR AUTOMÁTICAMENTE</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
    <pre>
    <?php echo $output; ?>
    </pre>
</body>
</html>