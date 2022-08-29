<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Alumnos_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['/'] = 'welcome/index';
$route['insert'] = 'Alumnos_controller/insert';
$route['fetch'] = 'Alumnos_controller/fetch';
$route['delete'] = 'Alumnos_controller/delete';
$route['edit'] = 'Alumnos_controller/edit';
$route['update'] = 'Alumnos_controller/update';

