<?php

/*
 * La función de comparación debe devolver un entero menor,
 * igual o mayor que cero si el primer argumento se considera
 * que sea respectivamente menor, en caso contrario un entero positivo.
 * Es importante checar la respuesta de usort ya que debe de compararse con ===
 */


$personajes[] = array('apellido' => 'Bros', 'edad' => 10, 'nombre' => 'Mario');
$personajes[] = array('apellido' => 'Bros', 'edad' => 8, 'nombre' => 'Toad');
$personajes[] = array('apellido' => 'Princess', 'edad' => 100, 'nombre' => 'Peach');
$personajes[] = array('apellido' => 'Vago', 'edad' => 1, 'nombre' => 'Luigi');
$personajes[] = array('apellido' => 'Azure', 'edad' => 76, 'nombre' => 'Bowser');

?>

<pre>
    <?php sort($personajes); ?>
    <?php print_r($personajes); ?>
</pre>

<pre>
    <?php usort($personajes, function ($a, $b) {
        if ($a['edad'] === $b['edad']) return 0;
        return ($a['edad'] < $b['edad']) ? -1 : 1;
    });
    ?>
    <?php print_r($personajes); ?>
</pre>