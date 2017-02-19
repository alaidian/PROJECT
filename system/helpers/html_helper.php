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
 * CodeIgniter HTML Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
<<<<<<< HEAD
 * @link		https://codeigniter.com/user_guide/helpers/html_helper.html
=======
 * @link		http://codeigniter.com/user_guide/helpers/html_helper.html
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
 */

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('heading'))
{
	/**
	 * Heading
	 *
	 * Generates an HTML heading tag.
	 *
	 * @param	string	content
	 * @param	int	heading level
	 * @param	string
	 * @return	string
	 */
	function heading($data = '', $h = '1', $attributes = '')
	{
		return '<h'.$h._stringify_attributes($attributes).'>'.$data.'</h'.$h.'>';
=======
/**
 * Heading
 *
 * Generates an HTML heading tag.  First param is the data.
 * Second param is the size of the heading tag.
 *
 * @access	public
 * @param	string
 * @param	integer
 * @return	string
 */
if ( ! function_exists('heading'))
{
	function heading($data = '', $h = '1', $attributes = '')
	{
		$attributes = ($attributes != '') ? ' '.$attributes : $attributes;
		return "<h".$h.$attributes.">".$data."</h".$h.">";
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('ul'))
{
	/**
	 * Unordered List
	 *
	 * Generates an HTML unordered list from an single or multi-dimensional array.
	 *
	 * @param	array
	 * @param	mixed
	 * @return	string
	 */
=======
/**
 * Unordered List
 *
 * Generates an HTML unordered list from an single or multi-dimensional array.
 *
 * @access	public
 * @param	array
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('ul'))
{
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	function ul($list, $attributes = '')
	{
		return _list('ul', $list, $attributes);
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('ol'))
{
	/**
	 * Ordered List
	 *
	 * Generates an HTML ordered list from an single or multi-dimensional array.
	 *
	 * @param	array
	 * @param	mixed
	 * @return	string
	 */
=======
/**
 * Ordered List
 *
 * Generates an HTML ordered list from an single or multi-dimensional array.
 *
 * @access	public
 * @param	array
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('ol'))
{
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	function ol($list, $attributes = '')
	{
		return _list('ol', $list, $attributes);
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('_list'))
{
	/**
	 * Generates the list
	 *
	 * Generates an HTML ordered list from an single or multi-dimensional array.
	 *
	 * @param	string
	 * @param	mixed
	 * @param	mixed
	 * @param	int
	 * @return	string
	 */
	function _list($type = 'ul', $list = array(), $attributes = '', $depth = 0)
=======
/**
 * Generates the list
 *
 * Generates an HTML ordered list from an single or multi-dimensional array.
 *
 * @access	private
 * @param	string
 * @param	mixed
 * @param	mixed
 * @param	integer
 * @return	string
 */
if ( ! function_exists('_list'))
{
	function _list($type = 'ul', $list, $attributes = '', $depth = 0)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		// If an array wasn't submitted there's nothing to do...
		if ( ! is_array($list))
		{
			return $list;
		}

		// Set the indentation based on the depth
<<<<<<< HEAD
		$out = str_repeat(' ', $depth)
			// Write the opening list tag
			.'<'.$type._stringify_attributes($attributes).">\n";

=======
		$out = str_repeat(" ", $depth);

		// Were any attributes submitted?  If so generate a string
		if (is_array($attributes))
		{
			$atts = '';
			foreach ($attributes as $key => $val)
			{
				$atts .= ' ' . $key . '="' . $val . '"';
			}
			$attributes = $atts;
		}
		elseif (is_string($attributes) AND strlen($attributes) > 0)
		{
			$attributes = ' '. $attributes;
		}

		// Write the opening list tag
		$out .= "<".$type.$attributes.">\n";
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

		// Cycle through the list elements.  If an array is
		// encountered we will recursively call _list()

		static $_last_list_item = '';
		foreach ($list as $key => $val)
		{
			$_last_list_item = $key;

<<<<<<< HEAD
			$out .= str_repeat(' ', $depth + 2).'<li>';
=======
			$out .= str_repeat(" ", $depth + 2);
			$out .= "<li>";
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

			if ( ! is_array($val))
			{
				$out .= $val;
			}
			else
			{
<<<<<<< HEAD
				$out .= $_last_list_item."\n"._list($type, $val, '', $depth + 4).str_repeat(' ', $depth + 2);
=======
				$out .= $_last_list_item."\n";
				$out .= _list($type, $val, '', $depth + 4);
				$out .= str_repeat(" ", $depth + 2);
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			}

			$out .= "</li>\n";
		}

<<<<<<< HEAD
		// Set the indentation for the closing tag and apply it
		return $out.str_repeat(' ', $depth).'</'.$type.">\n";
=======
		// Set the indentation for the closing tag
		$out .= str_repeat(" ", $depth);

		// Write the closing list tag
		$out .= "</".$type.">\n";

		return $out;
	}
}

// ------------------------------------------------------------------------

/**
 * Generates HTML BR tags based on number supplied
 *
 * @access	public
 * @param	integer
 * @return	string
 */
if ( ! function_exists('br'))
{
	function br($num = 1)
	{
		return str_repeat("<br />", $num);
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('img'))
{
	/**
	 * Image
	 *
	 * Generates an <img /> element
	 *
	 * @param	mixed
	 * @param	bool
	 * @param	mixed
	 * @return	string
	 */
	function img($src = '', $index_page = FALSE, $attributes = '')
=======
/**
 * Image
 *
 * Generates an <img /> element
 *
 * @access	public
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('img'))
{
	function img($src = '', $index_page = FALSE)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		if ( ! is_array($src) )
		{
			$src = array('src' => $src);
		}

		// If there is no alt attribute defined, set it to an empty string
		if ( ! isset($src['alt']))
		{
			$src['alt'] = '';
		}

		$img = '<img';

<<<<<<< HEAD
		foreach ($src as $k => $v)
		{
			if ($k === 'src' && ! preg_match('#^([a-z]+:)?//#i', $v))
			{
				if ($index_page === TRUE)
				{
					$img .= ' src="'.get_instance()->config->site_url($v).'"';
				}
				else
				{
					$img .= ' src="'.get_instance()->config->slash_item('base_url').$v.'"';
=======
		foreach ($src as $k=>$v)
		{

			if ($k == 'src' AND strpos($v, '://') === FALSE)
			{
				$CI =& get_instance();

				if ($index_page === TRUE)
				{
					$img .= ' src="'.$CI->config->site_url($v).'"';
				}
				else
				{
					$img .= ' src="'.$CI->config->slash_item('base_url').$v.'"';
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
				}
			}
			else
			{
<<<<<<< HEAD
				$img .= ' '.$k.'="'.$v.'"';
			}
		}

		return $img._stringify_attributes($attributes).' />';
=======
				$img .= " $k=\"$v\"";
			}
		}

		$img .= '/>';

		return $img;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('doctype'))
{
	/**
	 * Doctype
	 *
	 * Generates a page document type declaration
	 *
	 * Examples of valid options: html5, xhtml-11, xhtml-strict, xhtml-trans,
	 * xhtml-frame, html4-strict, html4-trans, and html4-frame.
	 * All values are saved in the doctypes config file.
	 *
	 * @param	string	type	The doctype to be generated
	 * @return	string
	 */
	function doctype($type = 'xhtml1-strict')
	{
		static $doctypes;

		if ( ! is_array($doctypes))
		{
			if (file_exists(APPPATH.'config/doctypes.php'))
			{
				include(APPPATH.'config/doctypes.php');
			}

			if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/doctypes.php'))
			{
				include(APPPATH.'config/'.ENVIRONMENT.'/doctypes.php');
			}

			if (empty($_doctypes) OR ! is_array($_doctypes))
			{
				$doctypes = array();
				return FALSE;
			}

			$doctypes = $_doctypes;
		}

		return isset($doctypes[$type]) ? $doctypes[$type] : FALSE;
=======
/**
 * Doctype
 *
 * Generates a page document type declaration
 *
 * Valid options are xhtml-11, xhtml-strict, xhtml-trans, xhtml-frame,
 * html4-strict, html4-trans, and html4-frame.  Values are saved in the
 * doctypes config file.
 *
 * @access	public
 * @param	string	type	The doctype to be generated
 * @return	string
 */
if ( ! function_exists('doctype'))
{
	function doctype($type = 'xhtml1-strict')
	{
		global $_doctypes;

		if ( ! is_array($_doctypes))
		{
			if (defined('ENVIRONMENT') AND is_file(APPPATH.'config/'.ENVIRONMENT.'/doctypes.php'))
			{
				include(APPPATH.'config/'.ENVIRONMENT.'/doctypes.php');
			}
			elseif (is_file(APPPATH.'config/doctypes.php'))
			{
				include(APPPATH.'config/doctypes.php');
			}

			if ( ! is_array($_doctypes))
			{
				return FALSE;
			}
		}

		if (isset($_doctypes[$type]))
		{
			return $_doctypes[$type];
		}
		else
		{
			return FALSE;
		}
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('link_tag'))
{
	/**
	 * Link
	 *
	 * Generates link to a CSS file
	 *
	 * @param	mixed	stylesheet hrefs or an array
	 * @param	string	rel
	 * @param	string	type
	 * @param	string	title
	 * @param	string	media
	 * @param	bool	should index_page be added to the css path
	 * @return	string
	 */
	function link_tag($href = '', $rel = 'stylesheet', $type = 'text/css', $title = '', $media = '', $index_page = FALSE)
	{
		$CI =& get_instance();
=======
/**
 * Link
 *
 * Generates link to a CSS file
 *
 * @access	public
 * @param	mixed	stylesheet hrefs or an array
 * @param	string	rel
 * @param	string	type
 * @param	string	title
 * @param	string	media
 * @param	boolean	should index_page be added to the css path
 * @return	string
 */
if ( ! function_exists('link_tag'))
{
	function link_tag($href = '', $rel = 'stylesheet', $type = 'text/css', $title = '', $media = '', $index_page = FALSE)
	{
		$CI =& get_instance();

>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		$link = '<link ';

		if (is_array($href))
		{
<<<<<<< HEAD
			foreach ($href as $k => $v)
			{
				if ($k === 'href' && ! preg_match('#^([a-z]+:)?//#i', $v))
=======
			foreach ($href as $k=>$v)
			{
				if ($k == 'href' AND strpos($v, '://') === FALSE)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
				{
					if ($index_page === TRUE)
					{
						$link .= 'href="'.$CI->config->site_url($v).'" ';
					}
					else
					{
						$link .= 'href="'.$CI->config->slash_item('base_url').$v.'" ';
					}
				}
				else
				{
<<<<<<< HEAD
					$link .= $k.'="'.$v.'" ';
				}
			}
		}
		else
		{
			if (preg_match('#^([a-z]+:)?//#i', $href))
=======
					$link .= "$k=\"$v\" ";
				}
			}

			$link .= "/>";
		}
		else
		{
			if ( strpos($href, '://') !== FALSE)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			{
				$link .= 'href="'.$href.'" ';
			}
			elseif ($index_page === TRUE)
			{
				$link .= 'href="'.$CI->config->site_url($href).'" ';
			}
			else
			{
				$link .= 'href="'.$CI->config->slash_item('base_url').$href.'" ';
			}

			$link .= 'rel="'.$rel.'" type="'.$type.'" ';

<<<<<<< HEAD
			if ($media !== '')
=======
			if ($media	!= '')
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			{
				$link .= 'media="'.$media.'" ';
			}

<<<<<<< HEAD
			if ($title !== '')
			{
				$link .= 'title="'.$title.'" ';
			}
		}

		return $link."/>\n";
=======
			if ($title	!= '')
			{
				$link .= 'title="'.$title.'" ';
			}

			$link .= '/>';
		}


		return $link;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('meta'))
{
	/**
	 * Generates meta tags from an array of key/values
	 *
	 * @param	array
	 * @param	string
	 * @param	string
	 * @param	string
	 * @return	string
	 */
=======
/**
 * Generates meta tags from an array of key/values
 *
 * @access	public
 * @param	array
 * @return	string
 */
if ( ! function_exists('meta'))
{
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	function meta($name = '', $content = '', $type = 'name', $newline = "\n")
	{
		// Since we allow the data to be passes as a string, a simple array
		// or a multidimensional one, we need to do a little prepping.
		if ( ! is_array($name))
		{
			$name = array(array('name' => $name, 'content' => $content, 'type' => $type, 'newline' => $newline));
		}
<<<<<<< HEAD
		elseif (isset($name['name']))
		{
			// Turn single array into multidimensional
			$name = array($name);
=======
		else
		{
			// Turn single array into multidimensional
			if (isset($name['name']))
			{
				$name = array($name);
			}
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		}

		$str = '';
		foreach ($name as $meta)
		{
<<<<<<< HEAD
			$type		= (isset($meta['type']) && $meta['type'] !== 'name')	? 'http-equiv' : 'name';
			$name		= isset($meta['name'])					? $meta['name'] : '';
			$content	= isset($meta['content'])				? $meta['content'] : '';
			$newline	= isset($meta['newline'])				? $meta['newline'] : "\n";
=======
			$type		= ( ! isset($meta['type']) OR $meta['type'] == 'name') ? 'name' : 'http-equiv';
			$name		= ( ! isset($meta['name']))		? ''	: $meta['name'];
			$content	= ( ! isset($meta['content']))	? ''	: $meta['content'];
			$newline	= ( ! isset($meta['newline']))	? "\n"	: $meta['newline'];
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

			$str .= '<meta '.$type.'="'.$name.'" content="'.$content.'" />'.$newline;
		}

		return $str;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('br'))
{
	/**
	 * Generates HTML BR tags based on number supplied
	 *
	 * @deprecated	3.0.0	Use str_repeat() instead
	 * @param	int	$count	Number of times to repeat the tag
	 * @return	string
	 */
	function br($count = 1)
	{
		return str_repeat('<br />', $count);
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('nbs'))
{
	/**
	 * Generates non-breaking space entities based on number supplied
	 *
	 * @deprecated	3.0.0	Use str_repeat() instead
	 * @param	int
	 * @return	string
	 */
	function nbs($num = 1)
	{
		return str_repeat('&nbsp;', $num);
	}
}
=======
/**
 * Generates non-breaking space entities based on number supplied
 *
 * @access	public
 * @param	integer
 * @return	string
 */
if ( ! function_exists('nbs'))
{
	function nbs($num = 1)
	{
		return str_repeat("&nbsp;", $num);
	}
}


/* End of file html_helper.php */
/* Location: ./system/helpers/html_helper.php */
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
