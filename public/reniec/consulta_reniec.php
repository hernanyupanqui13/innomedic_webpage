<?php
require 'simple_html_dom.php';
error_reporting(E_ALL ^ E_NOTICE);
   
$dni = $_POST['dni'];

 
// Hacemos el pedido a otra pagina web 
$consulta = file_get_html('https://eldni.com/pe/buscar-por-dni?dni='.$dni); // Demora poco, pero no tiene todos los dni

// Otras alternativas
//$consulta = file_get_html('https://portaladminusuarios.reniec.gob.pe/validacionweb/datos.do?dni='.$dni);
//$consulta = file_get_html('https://dni.optimizeperu.com/?dni='.$dni);
//$consulta = file_get_html('https://searchpe.herokuapp.com/public/api/essalud/dni/'.$dni);

 
$datosnombres = array();
foreach($consulta->find('td') as $header) {
        $datosnombres[] = $header->plaintext;
}
 
 
// La logica de la paginas es apellido paterno | apellido materno | nombres 
 
$datos = array(
        0 => $dni,
        1 => $datosnombres[0],
        2 => $datosnombres[1],
        3 => $datosnombres[2],
        4 => $datosnombres[3],
);

// Enviando los datos e JSON al cliente
echo json_encode($datos);
 
?>



