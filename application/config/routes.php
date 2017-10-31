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
$route['default_controller'] = 'Login';
$route['panel'] = 'Login';

//READ
$route['dashboard'] = 'Superadmin';
$route['user'] = 'Superadmin/read_user';
$route['produk'] = 'Superadmin/read_produk';
$route['kontak'] = 'Superadmin/read_kontak';
$route['alamat'] = 'Superadmin/read_alamat';
$route['settingpagestentang'] = 'Superadmin/read_tentang';
$route['pengaturan'] = 'Superadmin/read_pengaturan';
$route['log'] = 'Superadmin/read_log';

//INSERT
$route['insert_user'] = 'Superadmin/insert_user';
$route['insert_produk'] = 'Superadmin/insert_produk';
$route['insert_kontak'] = 'Superadmin/insert_kontak';
$route['insert_alamat'] = 'Superadmin/insert_alamat';

//EDIT
$route['edit_user/(:any)'] = 'Superadmin/edit_user/$1';
$route['edit_produk'] = 'Superadmin/edit_produk';
$route['edit_kontak/(:any)'] = 'Superadmin/edit_kontak/$1';
$route['edit_alamat/(:any)'] = 'Superadmin/edit_alamat/$1';
$route['edit_tentang'] = 'Superadmin/edit_tentang';
$route['edit_pengaturan'] = 'Superadmin/edit_pengaturan';

//FRONT END
$route['home'] = 'Main';
$route['bahan_kain_sprei'] = 'Main/sprei';
$route['bahan_kain_kaos'] = 'Main/kaos';
$route['tentang'] = 'Main/tentang';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
