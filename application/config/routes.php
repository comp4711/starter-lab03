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

$route['default_controller'] = "welcome";
$route['404_override'] = '';

//Remaps the segment 'sleep' to the First Controller's zzz method
$route['sleep'] = 'first/zzz';

//Remaps the segment 'lock/*' to the Welcome Controller's shucks method
$route['lock/(:any)/(:any)'] = 'welcome/shucks';

//Remaps the segment 'show/(digit*)' to the First Controller's gimme method
//passing in the parameter to gimme
$route['show/(:num)'] = 'first/gimme/$1';

//Remaps the segment 'dunno' to the Guess Controller's index method
$route['dunno'] = 'guess';

//Remaps the segment '(4 letters)/bingo/' to the Bingo Controller's index method
$route['[a-zA-Z]{4}/bingo'] = 'bingo';

//Remaps the segment 'comp(at least one digit)/*' to the Bingo Controller's
//wisdom method
$route['comp[\d]+/(:any)'] = 'bingo/wisdom';


/* End of file routes.php */
/* Location: ./application/config/routes.php */