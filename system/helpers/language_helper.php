<<<<<<< HEAD
<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
=======
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright		Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @copyright		Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

/**
 * CodeIgniter Language Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
<<<<<<< HEAD
 * @link		https://codeigniter.com/user_guide/helpers/language_helper.html
=======
 * @link		http://codeigniter.com/user_guide/helpers/language_helper.html
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
 */

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('lang'))
{
	/**
	 * Lang
	 *
	 * Fetches a language variable and optionally outputs a form label
	 *
	 * @param	string	$line		The language line
	 * @param	string	$for		The "for" value (id of the form element)
	 * @param	array	$attributes	Any additional HTML attributes
	 * @return	string
	 */
	function lang($line, $for = '', $attributes = array())
	{
		$line = get_instance()->lang->line($line);

		if ($for !== '')
		{
			$line = '<label for="'.$for.'"'._stringify_attributes($attributes).'>'.$line.'</label>';
=======
/**
 * Lang
 *
 * Fetches a language variable and optionally outputs a form label
 *
 * @access	public
 * @param	string	the language line
 * @param	string	the id of the form element
 * @return	string
 */
if ( ! function_exists('lang'))
{
	function lang($line, $id = '')
	{
		$CI =& get_instance();
		$line = $CI->lang->line($line);

		if ($id != '')
		{
			$line = '<label for="'.$id.'">'.$line."</label>";
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		}

		return $line;
	}
}
<<<<<<< HEAD
=======

// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./system/helpers/language_helper.php */
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
