 <?php
 if(isset($_POST['enviar'])){
 function operaciones($num1, $num2, $oper){ 
     
$num1=$_POST['primero'];
$num2=$_POST['segundo'];
$oper=$_POST['operador'];

  if($oper=='s'){
   $resul=$num1+$num2;
   echo $num1. '+'.$num2.':'.$resul.'<br>';
   echo "El resultado de la suma es: " . $resul;
  }elseif($oper=='r'){
   $resul=$num1-$num2;
   echo $num1. '-'.$num2.':'.$resul.'<br>';
   echo "El resultado de la resta es: ".$resul;
  } elseif($oper=='m'){
   $resul=$num1*$num2;
   echo $num1. '*'.$num2.':'.$resul.'<br>';
   echo "El resultado de la multiplicacion es: ".$resul;
  } elseif($oper=='d'){
   $resul=$num1/$num2;
   echo $num1. '/'.$num2.':'.$resul.'<br>';
   echo "El resultado de la divison es: ".$resul;
  }
 }
 operaciones($_POST['primero'], $_POST['segundo'],$_POST['operador'] );
}
?>