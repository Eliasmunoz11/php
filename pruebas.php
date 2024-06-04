<?php

    $numero = 2;

    for($i = 0 ; $i <=10; $i++){

        $resultado = $numero * $i;

        echo" $resultado = $numero x $i <br>";

    }

    $mes = 7;

    switch($mes){
        case 1:
            echo"Estas en el mes de Enero";
            break;
           
            case 2:
                echo"Estas en el mes de Febrero";
                break;

                case 3:
                    echo"Estas en el mes de Marzo";
                    break;
                    
                    case 4:
                        echo"Estas en el mes de Abril";
                        break;

                        case 5:
                            echo"Estas en el mes de Mayo";
                            break;

                            case 6:
                                echo"Estas en el mes de Junio";
                                break;

                                case 7:
                                    echo"Estas en el mes de Julio";
                                    break;

                                    case 8:
                                        echo"Estas en el mes de Agosto";
                                        break;

                                        case 9:
                                            echo"Estas en el mes de Septiembre";
                                            break;

                                            case 10:
                                                echo"Estas en el mes de Octubre";
                                                break;

                                                case 11:
                                                    echo"Estas en el mes de Noviembre";
                                                    break;

                                                    case 12:
                                                        echo"Estas en el mes de Diciembre";
                                                        break;

        }

        


$num = -1;

if($num > 0){

    $suma = 0;

    for($i = 1; $i <= $num; $i++){

        $suma = $suma + $i;
}

echo"la suma es $suma";
}
else{
    echo"No se puede hacer la suma porque es numero negativo";
}



?>

