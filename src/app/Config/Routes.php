<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboardReview', 'DashboardReview::index');
$routes->get('/coursesReview', 'CoursesReview::index');
$routes->get('/register', 'Register::index');
