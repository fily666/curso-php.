
<?php
function Escenario($ListEscenario){
    //Se crea la tabla y sus encabezados
echo "<table class='table table-bordered'>";
            echo "<tr class='info'>";
            echo "<th colspan='6'>Escenario</th>";
            echo "<tr class='info'>";
                /*-- Se crean los encabezados de las tabla*/
                echo "<th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th> 
                <th>5</th>
            </tr>";
    //Se recorre el Array mediante con un foreach y se imprime cada fila y columna de la tabla
$i=1;
foreach ($ListEscenario as $fila) {
    echo "<tr >";
       echo "<th class='info'>";
       echo $i;
       echo "</th>";
    foreach ($fila as $silla) {
        echo "<td>";
        echo $silla;
        echo "</td>";
    }
    echo "</tr>";
    $i++;
    }
echo "</table>";
}
?>