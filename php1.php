<?php
echo "<h1>ola php</h1>";
echo "<br>";

$num =9;
$lang =[
    'es' => 'español',
    'en' => 'ingles'
];

echo "Suma 2+2: ".((int)2+(int)2);
echo "Resta 2-2: ".((int)2-(int)2);
echo "Multi 2*2: ".((int)2*(int)2);
echo "divide 2/2". ((int)2/(int)2);
echo "modulo 2%2". ((int)2% (int)2);
echo "exponencial". ((int)2**(int)2);
echo <br>
$app ='name';
$name ='infocak';
echo $app; //name
echo $name; //infocal
if ($num==9){
    echo "hola";
} else {
    echo "no hola";
}
$num1 =5;
while ($num1>0){
    echo $num1;
    $num1++;
}
$num2 =4;
do{
    echo $num2;
    $num2--;
} while ($num2);
switch ($num1){
    case 1:
        echo "numero ".$num2;
        break;
}
for ($i=0;$i<5;$i++){
    echo $i;
}
$datos=['1','2','3'];
foreach ($datos as $row){
    echo $row;
}

?>