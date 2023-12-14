<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/register', 'Register::index');
$routes->get('/courses', 'Courses::index');
$routes->get('/schedule', 'Schedule::index');
