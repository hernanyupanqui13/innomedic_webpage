<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */ 
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Inicio');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Inicio::index');
$routes->post('/process_booking(:any)', 'Inicio::process_booking');
$routes->get('/Resultados(:any)', 'Inicio::Resultados');

$routes->post('/', 'Inicio::enviar_datos_mailer_phone');

$routes->get('/detalles_blog', 'Inicio::detalles_blog');


$routes->post('/recoger_informacion(:any)', 'Inicio::recoger_informacion');



/*
$routes->post('/process_contactform(:any)', 'Inicio::process_contactform');
$routes->post('/process_question(:any)', 'Inicio::process_question');
$routes->post('/Zona_roja(:any)', 'Inicio::Zona_roja');*/
//$routes->post('SendMail(:any)', 'Inicio::SendMail');
//

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
