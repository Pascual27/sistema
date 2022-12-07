<?php  
$numero = $_POST['numero'];
$ultimo =1;
$penultimo =0;
$total= 1 ;
echo "0,1";
while ($ultimo <= $numero) {
   $aux = $ultimo + $penultimo;
   $penultimo = $ultimo;
   $ultimo = $aux;
   $total +=$aux;
   echo",".$aux;
}
   echo "<br>".$total."</h2>";





      
    
   




/*$numero = $_POST['numero'];/*
$conteo = 0;
for ($i=2; $i < $numero; $i++) { 
    if($numero%$i==0){
    $conteo++;
     }
}
if($conteo>0){
    echo $numero."es un numero compuesto";
}else{
    echo $numero."es un numero primo";
}*/
/*$numero = $_POST['numero'];
for ($i=1; $i <=$numero; $i++) { 
    
    if ($i%3!=0 && $i%5!=0 && $i%9!=0) {
        echo$i." - ";
    }
}*/
?>