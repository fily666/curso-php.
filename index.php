<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operaciones basicas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        
        <div class="panel panel-primary">
            <div class="panel-heading"> Curso de php </div>
            <div class="panel-body">
                <div class="container">
   
                    Wilmar Felipe <br>
                    Rincon castañeda <br>
                    Desarrollo web con PHP<br>
                    Evidencia: Taller "Uso de funciones"<br>

                   
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">Operaciones Basicas </div>
                             <div class="panel-body">
                        
                            
                            <form id="form1" name="form1" method="post" action="">
                                
                                ingresar numero 1 <br>
                                <input class="form-control" type="number" name="primero" required /> <br>
                                Operaciones <br>
                                <select class="form-control" name="operador" required>
                                    <option value="">-Seleccion-</option>
                                    <option value="s">S</option>
                                    <option value="r">R</option>
                                    <option value="m">M</option>
                                    <option value="d">D</option>
                                </select><br>
                                ingresar numero 2 <br>
                                <input class="form-control" type="number" name="segundo" required /><br>
                                <input type="submit" name="enviar" value="Resultado" class="btn-success" />
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            Nota: Operaciones Básicas simbología <br><br>
                            
                            Suma (+) = S <br>
Resta (-) = R <br>
Multiplicación (*) = M<br>
División (/) = D

                        </div>
                        <div class="panel-body">
<div class="alert alert-success">
  
 <?php
 
  require_once 'Biblioteca.php';
    
?>
                
  
</div>               

                              </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</body>

</html>
