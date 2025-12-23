<?php
    header("Content-Type, application/json");
    header("Access-Control-Allow-Origin, *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    $origin_data = json_decode(file_get_contents("origin_data.json"), true);

    echo "<h1>My PHP API</h1>";

    echo json_encode($origin_data);

    // $method_action = $_SERVER["REQUEST_METHOD"];

    // switch($method_action) {
    //     case "GET":
    //         echo json_encode($origin_data);
    //         break;
    //     default:
    //         echo json_encode(["exception" => "Found Exception on Requesting API"]);
    // }

?>


