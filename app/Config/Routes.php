<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/login', 'Login::index'); // Redirect to login page

// Login routes
$routes->get('login', 'Login::index');      // Show login form
$routes->post('login/auth', 'Login::auth'); // Process login
$routes->get('logout', 'Login::logout');    // Logout

// Register routes
$routes->get('/', 'Register::index');   // Show registration form
$routes->post('register/save', 'Register::save'); // Process registration

// Dashboard (example, after login)
$routes->get('dashboard', 'Dashboard::index'); // You need to create Dashboard controller
