<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("America/Bogota");

// Proyect Name
$config['projectName']  = 'Solucionaticos';
$config['projectUrl']  = 'https://www.solucionaticos.com';

// Version
$config['version'] = '1.0.0.0';

// Paths
$admin_template = 'AdminLTE-2.4.18/'; 
$config['pathViewTemplateAdmin'] = 'admin/' . $admin_template;
$config['pathAssetsTemplateAdmin'] = 'assets/templates/admin/' . $admin_template;

$front_template = 'dostart-v1.3/';
$config['pathViewTemplateFront'] = 'front/' . $front_template;
$config['pathAssetsTemplateFront'] = 'assets/templates/front/' . $front_template;

//$this->config->item('path_template_admin')

// Date
$config['YmdHis']  = date('Y-m-d H:i:s');
$config['Ymd2His'] = date('Y-m-d H:i:s', strtotime('+2 hours'));
$config['Y6md']    = date('Y-m-d', strtotime('+6 months'));
$config['Ymd']     = date('Y-m-d');
$config['Y']       = date('Y');

// Time
$config['1minute'] = 60;
$config['1hour']   = 60*60;
$config['1day']    = 60*60*24;
$config['1week']   = 60*60*24*7;
$config['1month']  = 60*60*24*30;
$config['1year']   = 60*60*24*365;
