<?php

function ValidarMoedas($count,$array,$matches){
    
    foreach($array as $value){
        if($matches[1]== $value || $matches[2] == $value){
            $count++;
        }
    }
    if($count == 2){
    }else{
        echo 'Insira uma moeda valida, apenas USD,BRL,EUR';
    }
    
}
function json_responce($json_code){
    header('Content-Type: application/json');
    echo json_encode($json_code);
}


function GetRequest($key1,$key2,$matches){
    if($matches[1] == 'BRL' && $matches[2] == 'EUR' || $matches[1] == 'BRL' && $matches[2] == 'USD'){
        switch($matches[2]){
            case 'BRL':
                $symbol = "R$";
                break;
            case 'USD':
                $symbol = "$";
                break;
            case 'EUR': 
                $symbol = "€";
                break;
        }    
        $conversion = $key1 / $key2;
        $json_code = [ 

            "convertedValue" => $conversion,
            "symbol" => $symbol

        ];
        json_responce($json_code);
    }else{
        switch($matches[2]){
            case 'BRL':
                $symbol = "R$";
                break;
            case 'USD':
                $symbol = "$";
                break;
            case 'EUR': 
                $symbol = "€";
                break;
        }    
        $conversion = $key1 * $key2;
        $json_code = [ 

            "convertedValue" => $conversion,
            "symbol" => $symbol

        ];
        json_responce($json_code);
    }
}