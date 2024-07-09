<?php

namespace Config;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes('False');
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('principal_ultimo', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/ROUTES.php')){
    require APPPATH . 'Config/' . ENVIRONMENT . '/ROUTES.php';
}