<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/test', 'Home::test');

$routes->get('/', 'Home::index');

$routes->get('/hitungsubtotal/(:num)/(:any)/(:num)/(:num)', 'Home::hitungSubTotal/$1/$2/$3/$4');
$routes->get('/getcoordinate/(:segment)', 'Home::getCoordinate/$1');
$routes->get('/getDistance/(:any)/(:any)', 'Home::getDistance/$1/$2');
$routes->post('/savePemesanan', 'Home::savePemesanan');
$routes->get('/getdiskon/(:any)', 'Home::getDiskon/$1');

$routes->get('/aboutus', 'aboutus::index');
$routes->get('/service', 'service::index');
$routes->get('/gallery', 'gallery::index');
$routes->get('/contact', 'contact::index');
$routes->post('/savekritiksaran', 'contact::saveKritikSaran');

$routes->get('/register', 'register::index');
$routes->post('/createaccount', 'register::createAccountUser');
//$routes->get('/signup', 'signup::index');
//$routes->post('/createaccount', 'signup::createAccountUser');


$routes->get('/login', 'login::index');
$routes->post('/login', 'login::login');
$routes->get('/logout', 'login::logout');

$routes->get('/dashboard', 'dashboard::index', ['filter' => 'authadmin']);
$routes->get('/courieradd', 'Courier::addCourierPage', ['filter' => 'authadmin']);
$routes->post('/courieradd', 'Courier::addCourier');
$routes->get('/courieredit/(:any)', 'Courier::editCourierPage/$1', ['filter' => 'authadmin']);
$routes->post('/courierupdate', 'Courier::updateCourier');
$routes->get('/courierdelete/(:any)', 'Courier::courierDelete/$1', ['filter' => 'authadmin']);
$routes->get('/courierlist', 'Courier::index', ['filter' => 'authadmin']);

$routes->get('/discountadd', 'Discount::addDiscountPage', ['filter' => 'authadmin']);
$routes->post('/discountadd', 'Discount::discountAdd');
$routes->get('/discountedit/(:num)', 'Discount::editDiscountPage/$1', ['filter' => 'authadmin']);
$routes->post('/discountupdate', 'Discount::discountUpdate');
$routes->get('/discountdelete/(:any)', 'Discount::deleteDiskon/$1', ['filter' => 'authadmin']);
$routes->get('/discountlist', 'Discount::index', ['filter' => 'authadmin']);

$routes->get('/rateedit/(:any)', 'Rate::editRatePage/$1', ['filter' => 'authadmin']);
$routes->post('/updaterate', 'Rate::updateRate');
$routes->get('/ratelist', 'Rate::index', ['filter' => 'authadmin']);

$routes->get('/orderedit/(:any)', 'Order::editOrderPage/$1', ['filter' => 'authadmin']);
$routes->post('/updateorder', 'Order::updateOrder', ['filter' => 'authadmin']);
$routes->get('/setdeletedpenerima/(:any)','Order::setDeletedPenerima/$1');
$routes->get('/deleteorder/(:any)', 'Order::deleteOrder/$1');
$routes->get('/orderlist', 'Order::index', ['filter' => 'authadmin']);

$routes->get('/useradd', 'User::addUserPage', ['filter' => 'authadmin']);
$routes->get('/useredit/(:any)', 'User::editUserPage/$1', ['filter' => 'authadmin']);
$routes->post('/updateuser', 'User::updateUser');
$routes->get('/deleteuser/(:any)', 'User::deleteUser/$1');
$routes->get('/userlist', 'User::index', ['filter' => 'authadmin']);

$routes->get('/commentlist', 'commentlist::index', ['filter' => 'authadmin']);
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
