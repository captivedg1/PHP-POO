<!DOCTYPE html>
<html>
<head>
    <title>POO AVANZADO I</title>
</head>

<body>
    
    <?php
        define('INC', '/includes/');
        require_once __DIR__ . INC . 'Curso.inc.php';

        $curso1 = new Curso('POO en PHP', 'Yesi Days', '3 sesiones', 10, true);

        $curso2 = new Curso('JavaScript', 'Alvaro', '6 sesiones', 0, true);

        echo $curso1->obtenerTitulo().'<br />';
        echo $curso1->obtenerProfesor().'<br />';

        $curso1->asignarTitulo('POO EN PHP I');
        echo $curso1->obtenerTitulo().'<br />';

        $curso1->asignarRequerimiento(['PHP desde cero', 'Conocimiento básicos en php', 'Ganas de aprender', 'Práctica']);
        echo '<h3>Mis requerimientos para la clase</h3>';

        $curso1->obtenerRequerimiento();

        echo Curso::$moneda.'<br/>';
        echo Curso::obtenerDenominacion();
        echo '<br/>';

        echo Curso::$bienvenida.'<br/>';
        echo Curso::obtenerBienvenida();

    ?>



</body>

</html>