<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['pages'] = 'pages/view';

$route['form/fetch'] = 'form/fetch';
$route['ajaxsearch'] = 'ajaxsearch/index';
$route['singlepage/search/:num'] = 'singlepage/search/$3';
$route['singlepage/edit/:num'] = 'singlepage/edit/$3';
$route['user/profile/:any'] = 'user/profile/$3';
$route['password/:any'] = 'password/index/$2';
$route['user/editform/:any'] = 'user/editform/$3';
$route['pages/upload'] = 'pages/upload';
$route['singlepage'] = 'singlepage/index';
$route['form/upload'] = 'form/upload';
$route['edit'] = 'form/editform';
$route['form/editform/:num'] = 'form/editform/$3';
$route['ajaxsearch/fetch'] = 'ajaxsearch/fetch';
// $route['pages/do_upload'] = 'pages/do_upload';
$route['pages/dashboard'] = 'pages/dashboard';
$route['user/edit/:any'] = 'user/edit/$3';
$route['user/confirm/:any'] = 'user/confirm/$3';

// $route['form/individual'] ='form/individual';
$route['register'] = 'register/index';
$route['login'] = 'login';
$route['demo'] = 'demo';
$route['login/logout'] = 'login/logout';
$route['form'] = 'form';
// $route['form/index'] ='form/index';
$route['form/view'] = 'form/view';
$route['register'] = 'register';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['welcome'] = 'welcome/index';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */