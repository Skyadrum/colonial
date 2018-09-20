<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'welcome';
$route['default_controller'] = 'Home/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routes front
$route[''] = 'Home/home';
$route['home'] = 'Home/home';
$route['home/(:num)'] = 'Home/home/$1';
$route['about'] = 'Home/about';
$route['contact'] = 'Home/contact';
$route['store/(:num)'] = 'Home/store/$1';

// Backend Routes
$route['dashboard'] = 'back/Dashboard';

// Banner Routes
$route['banners'] = 'back/Banners/listado';
$route['banners/agregar'] = 'back/Banners/form';
$route['banners/editar/(:num)'] = 'back/Banners/editar/$1';
$route['banners/(:num)'] = 'back/Banners/eliminar/$1';

// Shopping Routes
$route['shopping'] = 'Shopping/index';

// Productos Routes
$route['productos'] = 'back/Productos/listado';
$route['productos/agregar'] = 'back/Productos/form';
$route['productos/editar/(:num)'] = 'back/Productos/editar/$1';
$route['productos/(:num)'] = 'back/Productos/eliminar/$1';
