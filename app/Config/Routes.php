<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'PageController::dashboard');
$routes->get('/about', 'PageController::about');
$routes->get('/contact', 'PageController::contact');
$routes->get('/faqs', 'PageController::faqs');
$routes->setAutoRoute(true); // untuk melakukan routing dilakukan secara otomatis dengan mengikuti nama Controller dan method-nya. Pilihan opsi ada dua yaitu true dan false, yang mana kalau true berati auto route berjalan sedangkan false maka sebaliknya 
// Model bertugas untuk mengolah data;
// View bertugas untuk membuat tampilan;
// Controller bertugas untuk membuat logika dan merespon request.
$routes->get('/news', 'NewsController::index');