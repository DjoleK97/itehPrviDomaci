<?php

include "broker.php";
function posaljiGet($broker){
    $rezultat=$broker->getRezultat();
    $response=array();
   
    
    if(!$rezultat){
        $response["status"]="greska";
        $response['error']=$broker->getError();
        
    }else{
        $response["status"]="ok";
        $response["data"]=array();
        while($red=$rezultat->fetch_object()){
            $response["data"][]=$red;
        }
    }
    echo json_encode($response);
}
function posaljiPost($broker)
{
    if(!$broker->getRezultat()){
        echo $broker->getError();
    }else{
        echo "ok";
    }
}

?>