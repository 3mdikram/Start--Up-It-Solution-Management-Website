<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('quote_form', 'Home::addUserQuote');
$routes->group('/', ["namespace" => "App\Controllers\Website"] , function($routes){
    $routes->get('about', 'About::index');
    $routes->get('service', 'ServiceController::index');
    $routes->get('blogs', 'BlogController::index');
    $routes->get('blogs/details/(:num)', 'BlogController::postDetails/$1');
    $routes->get('blogs/(:num)?', 'BlogController::categoryByPost/$1');
    $routes->get('blogs/tag_by_post/(:num)', 'BlogController::TagsByPost/$1');
    $routes->get('contact_us', 'ContactUs::index');
    $routes->post('contact_us', 'ContactUs::SavedData');
    
});
//Admin Route
$routes->group('admin', ["namespace" => "App\Controllers\Auth"] , function($routes){
    $routes->get('home', 'HomeController::index');
    $routes->get('sidebar_page_add', 'Sidebarpagecont::index');
    $routes->post('sidebar_page_add', 'Sidebarpagecont::addPageData');
    $routes->get('sidebar_page_update', 'Sidebarpagecont::sbarPageUpdate');
    $routes->post('sidebar_page_update', 'Sidebarpagecont::spageupdate');
    $routes->get('sidebar_page_update/(:num)', 'Sidebarpagecont::deleteData/$1');
    $routes->get('add_web_header_page', 'Webheaderpageadd::index');
    $routes->post('add_web_header_page', 'Webheaderpageadd::wpnewpageadd');
    $routes->get('update_web_header_page', 'Webheaderpageadd::getpageshow');
    $routes->post('update_web_header_page', 'Webheaderpageadd::whpupdated');
    $routes->get('update_web_header_page/(:num)', 'Webheaderpageadd::dltwhp/$1');
    $routes->get('web_service', 'Webservicecont::index');
    $routes->post('web_service', 'Webservicecont::addnewebservice');
    $routes->post('web_service_update', 'Webservicecont::updateserviceswp');
    $routes->get('web_service_update/(:num)', 'Webservicecont::deleteDataService/$1');
    $routes->get('price_plans', 'Priceplancont::index');
    $routes->post('price_plans', 'Priceplancont::addnewpriceplans');
    $routes->get('price_plans/(:num)', 'Priceplancont::getpriceplandata/$1');
    $routes->post('price_plans_update', 'Priceplancont::updatepricedatajx');
    $routes->get('price_plans_delete/(:num)', 'Priceplancont::deletepricecard/$1');
    $routes->get('show_contact_us', 'Showcontactmessage::index');
    $routes->get('client_about', 'Clientabout::index');
    $routes->get('team_members', 'Clientabout::teamembershow');
    
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
