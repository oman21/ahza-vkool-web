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
|	http://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller'] = 'id/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//indonesia
$route['home'] = 'id/home';
$route['home/detail/(:any)'] = 'id/home/detail/$1';

$route['otomotif/detail/(:any)'] = 'id/otomotif/detail/$1';
$route['otomotif/portfolio'] = 'id/otomotif/portfolio';

$route['bangunan/detail/(:any)'] = 'id/bangunan/detail/$1';
$route['bangunan/portfolio'] = 'id/bangunan/portfolio';

$route['cek-harga-otomotif'] = 'id/cek_harga';
$route['cek-harga-bangunan'] = 'id/cek_harga/bangunan';

$route['event'] = 'id/event';
$route['berita'] = 'id/berita';
$route['video'] = 'id/video';

$route['dealer'] = 'id/dealer';

$route['tentang-vkool'] = 'id/hubungi_kami/tentang_vkool';
$route['penghargaan'] = 'id/hubungi_kami/penghargaan';

//english
$route['en/home'] = 'en/home';
$route['en/(:any)'] = 'en/home/detail/$1';

$route['en/automotive/detail/(:any)'] = 'en/otomotif/detail/$1';
$route['en/automotive/portfolio'] = 'en/otomotif/portfolio';

$route['en/architectural/detail/(:any)'] = 'en/bangunan/detail/$1';
$route['en/architectural/portfolio'] = 'en/bangunan/portfolio';

$route['en/price-estimation-automotive'] = 'en/cek_harga';
$route['en/price-estimation-architectural'] = 'en/cek_harga/bangunan';

$route['en/event'] = 'en/event';
$route['en/news'] = 'en/berita';
$route['en/video'] = 'en/video';

$route['en/dealer'] = 'en/dealer';

$route['en/about-vkool'] = 'en/hubungi_kami/tentang_vkool';
$route['en/awards'] = 'en/hubungi_kami/penghargaan';