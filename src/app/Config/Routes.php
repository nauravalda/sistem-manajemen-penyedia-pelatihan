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
$routes->get('/dashboardReview', 'DashboardReview::index');

$routes->get('/coursesReview', 'CoursesReview::index');

$routes->get('/courses', 'Courses::index');
$routes->get('/courses/new', 'Courses::new');
$routes->post('/courses/new', 'Courses::create');
$routes->get('/courses/(:num)', 'Courses::detail/$1');
$routes->get('/courses/(:num)/edit', 'Courses::edit/$1');
$routes->post('/courses/(:num)/edit', 'Courses::update/$1');
$routes->get('/courses/(:num)/delete', 'Courses::delete/$1');

$routes->get('/schedule', function() {
    return redirect()->to(base_url('schedule/3'));
});
$routes->get('/schedule/(:num)', 'Schedule::index/$1');

// API routes
$routes->get('/api/courses/(:any)/(:any)', 'APIController::courses/$1/$2');
$routes->get('/api/course/(:any)/(:any)/(:any)', 'APIController::course/$1/$2/$3');
$routes->get('/api/schedule/(:any)/(:any)/(:num)/(:any)', 'APIController::schedule/$1/$2/$3/$4');
$routes->get('/api/schedule_day/(:any)/(:any)/(:num)', 'APIController::schedule_day/$1/$2/$3');