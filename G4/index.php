<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Desarrollo web con PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">  Desarrollo web con PHP (21730185) </div>
            <div class="panel-body">
            <div class="container">
   
                    Wilmar Felipe <br>
                    Rincon castañeda <br>
                    Desarrollo web con PHP (21730185)<br>
                    Evidencia: Taller “Uso de formularios para transferencia”<br>
                     
                </div>

                <div class="col-lg-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">Uso de formularios para transferencia</div>
                        <div class="panel-body">
                        
                        
  <?php

//Se requieren las funciones para imprimir el escenario y para enviar las acciones del usuario
require("escenario.php");
require("accion.php");
//Se ejecuta el if cuando el usuario envie la informacion del formulario
if(isset($_REQUEST["Enviar"])){
        //Se captura la información enviada del formulario
        $fila = $_POST['fila'];
        $puesto= $_POST['puesto'];
        $accion= $_POST['accion'];
        $StringEscenario=$_POST['ListEscenario'];
        //El String generado en el input oculto se convierte en un Array
        $count=0;
        for($i=0;$i<5;$i++){
            for($j=0;$j<5;$j++){
                $count=5*$i+$j;
                //Cada captura cada elemento del Array extrayendo dicho elemento del String
                $ListEscenario[$i][$j]=substr($StringEscenario,$count,1);
            }
            $count=0;
        }
//Se devuelve el Array con la información modificada por el usuario
$ListEscenario=Accion($fila,$puesto,$accion,$ListEscenario);
//Se ejecuta la funcion para mostrar el Escenario, dado el Array modificado
Escenario($ListEscenario);
}
//Se ejecuta el else if cuando el usario borra la informacion del formulario y cuando se carga la página
else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
$ListEscenario=array(array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"));
Escenario($ListEscenario);
}
?>


                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">


                            <table class="table table-bordered">
                                <form method="post">
                                    <!-- Se separa el array $ListEscenario en un String y de oculta-->
                                    <input type="text" name="ListEscenario" value="<?php foreach ($ListEscenario as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>" style="display:none" />
                                    <!-- Se crean los inputs que van a capturar la información introducida por el usario y las acciones-->
                                    <tr>
                                        <td>Fila: </td>
                                        <td>
                                            <!-- Se muesta la lista con las opciones posibles para la fila-->
                                            <select class="form-control" name="fila" required>
                                                <option value="">-Seleccione-</option>
                                                <option size="4">1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Puesto: </td>
                                        <td>
                                            <!-- Se muesta la lista con las opciones posibles para la puesto-->
                                            <select class="form-control" name="puesto" required>
                                                <option value="">-Seleccione-</option>
                                                <option size="4">1</option>
                                                <option size="4">2</option>
                                                <option size="4">3</option>
                                                <option size="4">4</option>
                                                <option size="4">5</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <!-- Se muestra el radio button con las acciones posibles-->

                                    <tr>
                                        <td>
                                            acciones
                                        </td>
                                        <td>
                                            <select class="form-control" name="accion" required>
                                                <option value="">-Seleccione-</option>
                                                <option name="accion" value="R">Reservar</option>
                                                <option name="accion" value="V">Comprar</option>
                                                <option name="accion" value="L">Liberar</option>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- Se muestran los botones con las acciones de enviar la información o borrar toda la informacion ingresada-->
                                        <td>
                                            <input type="submit" value="Enviar" name="Enviar" />
                                        </td>
                                        <td>
                                            <input type="submit" value="Borrar" name="Reset" />
                                        </td>
                                    </tr>
                                </form>
                            </table>


                        </div>

                    </div>
                </div>

            </div>
        </div>

</body>

</html>
