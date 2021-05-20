<?php 


use Peru\Sunat\RucFactory;

require '../../vendor/autoload.php';

$ruc = $_POST["nruc"];

$factory = new RucFactory();
$cs = $factory->create();

$company = $cs->get($ruc);
if (!$company) {
    echo 'Not found';
    return;
}

echo json_encode($company);
