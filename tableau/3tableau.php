<?php
$noms = array('Mathieu', 'Marie', 'Robert');
$prenoms = array('nom' => 'Marie', 'prenom' => 'Robert', 'age' => 99);

for ($numero = 0 ; $numero < 3 ; $numero++)
{
    echo '<p>' . $noms[$numero] . '</p>';
}
?>