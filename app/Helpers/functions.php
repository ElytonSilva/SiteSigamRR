<?php
function dia_semana($data){
    $num = date('N', strtotime($data));
    $saida = "";
    switch($num){
        case 1:{
            $saida = "SEG";
        }break;
        case 2:{
            $saida = "TER";
        }break;
        case 3:{
            $saida = "QUA";
        }break;
        case 4:{
            $saida = "QUI";
        }break;
        case 5:{
            $saida = "SEX";
        }break;
        case 6:{
            $saida = "SAB";
        }break;
        case 7:{
            $saida = "DOM";
        }break;
    }
    return $saida;
}

function gerador($numero){
    switch($numero){
        case 1:{
                return "A";
            }break;
        case 2:{
                return "B";
            }break;
        case 3:{
                return "B";
            }break;
        case 4:{
                return "C";
            }break;
        case 5:{
                return "D";
            }break;
        case 6:{
                return "E";
            }break;
        case 7:{
                return "F";
            }break;
        case 8:{
                return "G";
            }break;
        case 9:{
                return "H";
            }break;
        case 10:{
                return "I";
            }break;
        case 11:{
                return "J";
            }break;
        case 12:{
                return "K";
            }break;
        case 13:{
                return "L";
            }break;
        case 14:{
                return "M";
            }break;
        case 15:{
                return "N";
            }break;
        case 16:{
                return "O";
            }break;
        case 17:{
                return "P";
            }break;
        case 18:{
                return "Q";
            }break;
        case 19:{
                return "R";
            }break;
        case 20:{
                return "S";
            }break;
        case 21:{
                return "T";
            }break;
        case 22:{
                return "U";
            }break;
        case 23:{
                return "V";
            }break;
        case 24:{
                return "W";
            }break;
        case 25:{
                return "Y";
            }break;
        case 26:{
                return "X";
            }break;
        case 27:{
                return "Z";
            }break;
    }
}

function gerar_codigo($saida){
    $codigo = "";
    $data = new datetime();
    for($i=0; $i<5; $i++){
        $temp = gerador(rand(1, 27));
        $codigo = $codigo.$temp;
    }
    return dia_semana($data->format('d-m-Y')).pegar_data($data).$codigo.$saida;
}

function pegar_data($data){
    return str_replace("-", "", $data->format('d-m-Y'));
}

?>