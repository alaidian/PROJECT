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
 * CodeIgniter XML Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
<<<<<<< HEAD
 * @link		https://codeigniter.com/user_guide/helpers/xml_helper.html
=======
 * @link		http://codeigniter.com/user_guide/helpers/xml_helper.html
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
 */

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('xml_convert'))
{
	/**
	 * Convert Reserved XML characters to Entities
	 *
	 * @param	string
	 * @param	bool
	 * @return	string
	 */
=======
/**
 * Convert Reserved XML characters to Entities
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('xml_convert'))
{
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	function xml_convert($str, $protect_all = FALSE)
	{
		$temp = '__TEMP_AMPERSANDS__';

		// Replace entities to temporary markers so that
		// ampersands won't get messed up
<<<<<<< HEAD
		$str = preg_replace('/&#(\d+);/', $temp.'\\1;', $str);

		if ($protect_all === TRUE)
		{
			$str = preg_replace('/&(\w+);/', $temp.'\\1;', $str);
		}

		$str = str_replace(
			array('&', '<', '>', '"', "'", '-'),
			array('&amp;', '&lt;', '&gt;', '&quot;', '&apos;', '&#45;'),
			$str
		);

		// Decode the temp markers back to entities
		$str = preg_replace('/'.$temp.'(\d+);/', '&#\\1;', $str);

		if ($protect_all === TRUE)
		{
			return preg_replace('/'.$temp.'(\w+);/', '&\\1;', $str);
=======
		$str = preg_replace("/&#(\d+);/", "$temp\\1;", $str);

		if ($protect_all === TRUE)
		{
			$str = preg_replace("/&(\w+);/",  "$temp\\1;", $str);
		}

		$str = str_replace(array("&","<",">","\"", "'", "-"),
							array("&amp;", "&lt;", "&gt;", "&quot;", "&apos;", "&#45;"),
							$str);

		// Decode the temp markers back to entities
		$str = preg_replace("/$temp(\d+);/","&#\\1;",$str);

		if ($protect_all === TRUE)
		{
			$str = preg_replace("/$temp(\w+);/","&\\1;", $str);
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		}

		return $str;
	}
}
<<<<<<< HEAD
=======

// ------------------------------------------------------------------------

/* End of file xml_helper.php */
/* Location: ./system/helpers/xml_helper.php */
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
