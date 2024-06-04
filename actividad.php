<?php 

$nota = 90;
echo"La calificacion es $nota<br>";

if($nota >= 90){
    echo"La calificacion es A";

}
elseif($nota>=80){
    echo"La calificacion es B";

}
elseif($nota>=70){
    echo"La calificacion es C";

}
if($nota<70){
    echo"La calificacion es F";

}



$hora = 14;

if($hora<=12){
    echo"Buenos Dias";
}
elseif($hora>6){
    echo"Buenas Tardes";
}
else {
    echo"Buenas Noches";
}

$edad = 16;

if($edad<18){
    echo"Es menor de edad";
}
else($edad>=18){
    echo"Es mayor de adulto";
}
elseif($edad>=65){
    echo"es persona mayor";

}

?>


