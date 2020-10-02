<?php
$method=$_SERVER['REQUEST_METHOD'];
if($method=="POST"){
    $requestBody=file_get_contents('php://input//127.0.0.1');
    $json=json_decode($requestBody);
    $text=$json-> result->parameters->text;
    switch ($text) {
        case 'hi':
            $speech="Hi,Nice to meet you";
            break;
        case 'bye':
            $speech="bye,Nice to meet you";
            break;
        default:
            $speech="sorry, I didn't get that";
            break;
    }
    $response=new \stdClass();
    $response->speech;
    $response->displayText="";
    $response->source="webhook";
    echo json_encode($response);
}else{
     echo "Method not allowed";
}

?>
