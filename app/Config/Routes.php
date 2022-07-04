<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Supplier::index');
$routes->get('/supplier/add', 'Supplier::index');
// $routes->get('/supplier/add/step_one', 'Supplier::addSupplierStepOne');
// $routes->get('/supplier/add/step_two', 'Supplier::addSupplierStepTwo');
// $routes->get('/supplier/add/step_three', 'Supplier::addSupplierStepThree');
// $routes->get('/supplier/add/step_for', 'Supplier::addSupplierStepFor');
// $routes->get('/supplier/add/step_five', 'Supplier::addSupplierStepFive');
// $routes->get('/supplier/add/finish', 'Supplier::addSupplierFinish');
$routes->get('/supplier/list', 'Supplier::listSupplier');

$routes->post('/supplier/saveSupplier', 'Supplier::saveSupplier');
// $routes->post('/supplier/save/step_one', 'Supplier::saveSupplierStepOne');
// $routes->post('/supplier/save/step_two', 'Supplier::saveSupplierStepTwo');
// $routes->post('/supplier/save/step_three', 'Supplier::saveSupplierStepThree');
// $routes->post('/supplier/save/step_for', 'Supplier::saveSupplierStepFor');
// $routes->post('/supplier/save/step_five', 'Supplier::saveSupplierStepFive');

$routes->get('/login', 'Auth::index');
$routes->post('/login/auth', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

$routes->group('admin', ['filter' => 'authfilter'], function ($routes) {

    $routes->get('/', 'admin\Dashboard::index');

    $routes->get('category', 'admin\Category::index');
    $routes->get('category/add', 'admin\Category::add');
    $routes->get('category/edit/(:num)', 'admin\Category::edit/$1');
    $routes->post('category/save', 'admin\Category::save');
    $routes->patch('category/(:num)', 'admin\Category::setActive/$1');
    $routes->patch('category/update/(:num)', 'admin\Category::update/$1');
    $routes->delete('category/delete/(:num)', 'admin\Category::delete/$1');

    $routes->get('other', 'admin\OtherCategory::index');
    $routes->get('other/add', 'admin\OtherCategory::add');
    $routes->get('other/edit/(:num)', 'admin\OtherCategory::edit/$1');
    $routes->post('other/save', 'admin\OtherCategory::save');
    $routes->patch('other/(:num)', 'admin\OtherCategory::setActive/$1');
    $routes->patch('other/update/(:num)', 'admin\OtherCategory::update/$1');
    $routes->delete('other/delete/(:num)', 'admin\OtherCategory::delete/$1');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
