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

$routes->get('/', 'Home::index');

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

$routes->add('pages/test', 'Pages::test');
$routes->add('pages', 'Pages::index');
$routes->add('update', 'Pages::update',['filter' => 'authGuard']);
$routes->add('login', 'Pages::login');
$routes->add('logout', 'Pages::logout');
$routes->add('signup', 'Pages::signup');
$routes->add('categories', 'Pages::categories');
$routes->add('contact', 'Pages::contact');
$routes->add('users', 'Users::index');
$routes->add('/blog', 'Pages::blog',['filter' => 'authGuard']);
$routes->get('/blog', 'Pages::blog',['filter' => 'authGuard']);
$routes->post('/blog', 'Pages::blog',['filter' => 'authGuard']);
$routes->get('blogsview/view', 'BlogsView::view');
$routes->get('categories/politics', 'Home::politics');
$routes->get('categories/sports', 'Home::sports');
$routes->get('categories/technology', 'Home::technology/$1');
$routes->get('categories/science', 'Home::science');
$routes->get('categories/current-affairs', 'Home::current_affairs');
$routes->get('categories/space-research', 'Home::space_research');
$routes->get('blog/(:any)', 'Home::viewblog/$1');

$routes->get('abcblog', 'Demo::index');
