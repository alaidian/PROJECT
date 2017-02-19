<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

=======
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
<<<<<<< HEAD
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
=======
| 3. Helper files
| 4. Custom config files
| 5. Language files
| 6. Models
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
|
*/

/*
| -------------------------------------------------------------------
<<<<<<< HEAD
|  Auto-load Packages
=======
|  Auto-load Packges
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
<<<<<<< HEAD
$autoload['packages'] = array();

=======

$autoload['packages'] = array();


>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
<<<<<<< HEAD
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
$autoload['libraries'] = array('database','session');

/*
| -------------------------------------------------------------------
|  Auto-load Drivers
| -------------------------------------------------------------------
| These classes are located in system/libraries/ or in your
| application/libraries/ directory, but are also placed inside their
| own subdirectory and they extend the CI_Driver_Library class. They
| offer multiple interchangeable driver options.
|
| Prototype:
|
|	$autoload['drivers'] = array('cache');
|
| You can also supply an alternative property name to be assigned in
| the controller:
|
|	$autoload['drivers'] = array('cache' => 'cch');
|
*/
$autoload['drivers'] = array();
=======
| These are the classes located in the system/libraries folder
| or in your application/libraries folder.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'session', 'xmlrpc');
*/

$autoload['libraries'] = array();

>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
<<<<<<< HEAD
$autoload['helper'] = array('url');
=======

$autoload['helper'] = array();

>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/
<<<<<<< HEAD
$autoload['config'] = array();

=======

$autoload['config'] = array();


>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/
<<<<<<< HEAD
$autoload['language'] = array();

=======

$autoload['language'] = array();


>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
<<<<<<< HEAD
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/
$autoload['model'] = array();
=======
|	$autoload['model'] = array('model1', 'model2');
|
*/

$autoload['model'] = array();


/* End of file autoload.php */
/* Location: ./application/config/autoload.php */
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
