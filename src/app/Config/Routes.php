<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Local routes
$routes->get('/', 'Login::index');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/register', 'Register::index');
$routes->post('/register', 'Register::register');
$routes->get('/logout', 'Login::logout');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/courses', 'Courses::index');
$routes->get('/courses/new', 'Courses::new');
$routes->post('/courses/new', 'Courses::create');
$routes->get('/courses/(:num)', 'Courses::detail/$1');
$routes->get('/courses/(:num)/edit', 'Courses::edit/$1');
$routes->post('/courses/(:num)/edit', 'Courses::update/$1');
$routes->get('/courses/(:num)/delete', 'Courses::delete/$1');

$routes->get('/courses/(:num)/review', 'DashboardReview::index/$1');

$routes->get('/schedule', function() {
    return redirect()->to(base_url('schedule/3'));
});
$routes->get('/schedule/(:num)', 'Schedule::index/$1');

// API routes
$routes->get('/api/request', 'APIController::request_token');
$routes->get('/api/courses', 'APIController::courses');
$routes->get('/api/courses/search', 'APIController::search_courses');
$routes->get('/api/course', 'APIController::course');
$routes->get('/api/schedule/(:num)', 'APIController::schedule/$1');