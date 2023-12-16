<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
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

$routes->get('/schedule', function() {
    return redirect()->to(base_url('schedule/3'));
});
$routes->get('/schedule/(:num)', 'Schedule::index/$1');