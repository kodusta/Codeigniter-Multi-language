<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['(:any)'] = 'welcome/$1';
$route['(:any)/(:any)'] = 'welcome/$1/$2';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
