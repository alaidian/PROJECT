<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

=======
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
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
<<<<<<< HEAD
|	https://codeigniter.com/user_guide/general/routing.html
=======
|	http://codeigniter.com/user_guide/general/routing.html
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
<<<<<<< HEAD
| There are three reserved routes:
=======
| There area two reserved routes:
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
<<<<<<< HEAD
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

$route['DashboardController']='DashboardController/ProductBacklogPage';
$route['DashboardController/viewDashboard']='DashboardController/ViewDashboard';
$route['DashboardController/productBacklogPage/$1']='DashboardController/ProductBacklogPage';
$route['DashboardController/addTaskForm']='DashboardController/AddTaskForm';
$route['DashboardController/editGivenTaskDetail/$1']='DashboardController/EditTaskForm';
$route['DashboardController/addUserStoryForm']='DashboardController/AddUserStoryForm';
$route['DashboardController/updateUserStoryStatus']='DashboardController/UpdateUserStoryStatus';
$route['DashboardController/addUserStoryForm']='DashboardController/AddUserStoryForm';
$route['DashboardController/selectGivenUserDetail/$1']='DashboardController/ViewUserStoryForm';
$route['DashboardController']='DashboardController/index';

$route['AdminController']='AdminController/index';
$route['AdminController/index']='AdminController/index';
$route['AdminController/addUserDetail']='AdminController/AddUserDetail';


$route['(:any)/image']='ci/image';//for Anne
$route['default_controller'] = 'pages/home';
$route['(:any)']='pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['email'] = 'AdminController';
=======
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
