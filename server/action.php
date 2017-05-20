<?php

$postdata = file_get_contents("php://input");
$request = json_decode($postdata, true);

//header('Content-type: application/json');
header("Content-Type: text/plain");
include('DB.php');

$db = new conectarDB();

$type = $request['type'];
//$type = filter_var($typeTmp,FILTER_SANITIZE_STRING);
$filter = $request['filter'];


switch ($type) {
    case "mapa":
        $records = $db->getRows($filter);

        if (array_key_exists("resultado", $records)) {
            $data = array("records" => $records['resultado'], "status" => "OK");
        } else {
            echo('{"status":"NOK"}');
            break;
        }

        echo(json_encode($data));
        //echo '{"records":"'. $records . '","status":"OK"}';
        break;
    case "fotos":
        $records = $db->getFotos("fotos", $conditions);

        if (array_key_exists("resultado", $records)) {
            $data = array("records" => $records['resultado'], "total" => $records["total"], "status" => "OK");
        } else {
            echo('{"status":"NOK"}');
            break;
        }

        echo(json_encode($data));
        //echo '{"records":"'. $records . '","status":"OK"}';
        break;
    case "destacados":
        $records = $db->getDestacados();

        if (array_key_exists("resultado", $records)) {
            $data = array("records" => $records['resultado'], "total" => $records["total"], "status" => "OK");
        } else {
            echo('{"status":"NOK"}');
            break;
        }

        echo(json_encode($data));

        break;
    case "moneda":
        $moneda = $conditions['moneda'];
        error_log("moneda:". $moneda);
        $data = array("valor" => moneda($moneda), "status" => "OK");
        echo(json_encode($data));
        break;
    default:
        echo '{"status":"INVALID"}';
}
?>