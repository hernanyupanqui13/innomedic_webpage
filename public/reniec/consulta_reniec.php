//archivo consulta_reniec.php
 
//Corregido varios programadores
//Creditos Programadores
//Lima-Peru
 
<?php
require 'simple_html_dom.php';
error_reporting(E_ALL ^ E_NOTICE);
   
//$dni = $_POST['dni'];
$dni = $_POST['dni'];

 
//OBTENEMOS EL VALOR
//$consulta = file_get_html('https://portaladminusuarios.reniec.gob.pe/validacionweb/datos.do?dni='.$dni);
$consulta = file_get_html('https://eldni.com/pe/buscar-por-dni?dni='.$dni); //demora poquito, pero no tiene todos los dni
//$consulta = file_get_html('https://dni.optimizeperu.com/?dni='.$dni);
//
//$consulta = file_get_html('https://searchpe.herokuapp.com/public/api/essalud/dni/'.$dni);

 
$datosnombres = array();
foreach($consulta->find('td') as $header) {
 $datosnombres[] = $header->plaintext;
}
//print_r($headlines);
 
 
//LA LOGICA DE LA PAGINAS ES APELLIDO PATERNO | APELLIDO MATERNO | NOMBRES
 
//$partes = explode("|", $consulta);
 
 
$datos = array(
        0 => $dni,
        1 => $datosnombres[0],
        2 => $datosnombres[1],
        3 => $datosnombres[2],
        4 => $datosnombres[3],
);
 
echo json_encode($datos);
 
?>



