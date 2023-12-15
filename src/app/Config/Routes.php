<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Home::index');
$routes->get('/register', 'Register::index');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboardReview', 'DashboardReview::index');

$routes->get('/coursesReview', 'CoursesReview::index');

$routes->get('/courses', 'Courses::index');
$routes->get('/courses/new', 'Courses::new');
$routes->get('/courses/(:num)', 'Courses::detail/$1');
$routes->get('/courses/(:num)/edit', 'Courses::edit/$1');

$routes->get('/schedule', function() {
    return redirect()->to(base_url('schedule/3'));
});
$routes->get('/schedule/(:num)', 'Schedule::index/$1');

$routes->post('/courses/create', 'Courses::create');