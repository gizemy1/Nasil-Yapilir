<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'anasayfa';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["mesaj-gonder"]        = "anasayfa/send_contact_message";

$route["yemek"]               = "anasayfa/yemek_list";
$route["yemekdetay/(:any)"]   = "anasayfa/yemekdetay/$1";

$route["bakim"]               = "anasayfa/bakim_list";
$route["bakimdetay/(:any)"]    = "anasayfa/bakimdetay/$1";

$route["elisi"]               = "anasayfa/elisi_list";
$route["elisidetay/(:any)"]    = "anasayfa/elisidetay/$1";

$route["sosyalaktivite"]               = "anasayfa/sosyalaktivite_list";
$route["sosyalaktivitedetay/(:any)"]    = "anasayfa/sosyalaktivitedetay/$1";
