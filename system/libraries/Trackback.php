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
 * Trackback Class
 *
 * Trackback Sending/Receiving Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Trackbacks
 * @author		EllisLab Dev Team
<<<<<<< HEAD
 * @link		https://codeigniter.com/user_guide/libraries/trackback.html
 */
class CI_Trackback {

	/**
	 * Character set
	 *
	 * @var	string
	 */
	public $charset = 'UTF-8';

	/**
	 * Trackback data
	 *
	 * @var	array
	 */
	public $data = array(
		'url' => '',
		'title' => '',
		'excerpt' => '',
		'blog_name' => '',
		'charset' => ''
	);

	/**
	 * Convert ASCII flag
	 *
	 * Whether to convert high-ASCII and MS Word
	 * characters to HTML entities.
	 *
	 * @var	bool
	 */
	public $convert_ascii = TRUE;

	/**
	 * Response
	 *
	 * @var	string
	 */
	public $response = '';

	/**
	 * Error messages list
	 *
	 * @var	string[]
	 */
	public $error_msg = array();

	// --------------------------------------------------------------------
=======
 * @link		http://codeigniter.com/user_guide/libraries/trackback.html
 */
class CI_Trackback {

	var $time_format	= 'local';
	var $charset		= 'UTF-8';
	var $data			= array('url' => '', 'title' => '', 'excerpt' => '', 'blog_name' => '', 'charset' => '');
	var $convert_ascii	= TRUE;
	var $response		= '';
	var $error_msg		= array();
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

	/**
	 * Constructor
	 *
<<<<<<< HEAD
	 * @return	void
	 */
	public function __construct()
	{
		log_message('info', 'Trackback Class Initialized');
=======
	 * @access	public
	 */
	public function __construct()
	{
		log_message('debug', "Trackback Class Initialized");
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Send Trackback
	 *
<<<<<<< HEAD
	 * @param	array
	 * @return	bool
	 */
	public function send($tb_data)
=======
	 * @access	public
	 * @param	array
	 * @return	bool
	 */
	function send($tb_data)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		if ( ! is_array($tb_data))
		{
			$this->set_error('The send() method must be passed an array');
			return FALSE;
		}

		// Pre-process the Trackback Data
		foreach (array('url', 'title', 'excerpt', 'blog_name', 'ping_url') as $item)
		{
			if ( ! isset($tb_data[$item]))
			{
				$this->set_error('Required item missing: '.$item);
				return FALSE;
			}

			switch ($item)
			{
<<<<<<< HEAD
				case 'ping_url':
					$$item = $this->extract_urls($tb_data[$item]);
					break;
				case 'excerpt':
					$$item = $this->limit_characters($this->convert_xml(strip_tags(stripslashes($tb_data[$item]))));
					break;
				case 'url':
					$$item = str_replace('&#45;', '-', $this->convert_xml(strip_tags(stripslashes($tb_data[$item]))));
					break;
				default:
					$$item = $this->convert_xml(strip_tags(stripslashes($tb_data[$item])));
=======
				case 'ping_url'	: $$item = $this->extract_urls($tb_data[$item]);
					break;
				case 'excerpt'	: $$item = $this->limit_characters($this->convert_xml(strip_tags(stripslashes($tb_data[$item]))));
					break;
				case 'url'		: $$item = str_replace('&#45;', '-', $this->convert_xml(strip_tags(stripslashes($tb_data[$item]))));
					break;
				default			: $$item = $this->convert_xml(strip_tags(stripslashes($tb_data[$item])));
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
					break;
			}

			// Convert High ASCII Characters
<<<<<<< HEAD
			if ($this->convert_ascii === TRUE && in_array($item, array('excerpt', 'title', 'blog_name'), TRUE))
			{
				$$item = $this->convert_ascii($$item);
=======
			if ($this->convert_ascii == TRUE)
			{
				if ($item == 'excerpt')
				{
					$$item = $this->convert_ascii($$item);
				}
				elseif ($item == 'title')
				{
					$$item = $this->convert_ascii($$item);
				}
				elseif ($item == 'blog_name')
				{
					$$item = $this->convert_ascii($$item);
				}
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			}
		}

		// Build the Trackback data string
<<<<<<< HEAD
		$charset = isset($tb_data['charset']) ? $tb_data['charset'] : $this->charset;

		$data = 'url='.rawurlencode($url).'&title='.rawurlencode($title).'&blog_name='.rawurlencode($blog_name)
			.'&excerpt='.rawurlencode($excerpt).'&charset='.rawurlencode($charset);
=======
		$charset = ( ! isset($tb_data['charset'])) ? $this->charset : $tb_data['charset'];

		$data = "url=".rawurlencode($url)."&title=".rawurlencode($title)."&blog_name=".rawurlencode($blog_name)."&excerpt=".rawurlencode($excerpt)."&charset=".rawurlencode($charset);
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

		// Send Trackback(s)
		$return = TRUE;
		if (count($ping_url) > 0)
		{
			foreach ($ping_url as $url)
			{
<<<<<<< HEAD
				if ($this->process($url, $data) === FALSE)
=======
				if ($this->process($url, $data) == FALSE)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
				{
					$return = FALSE;
				}
			}
		}

		return $return;
	}

	// --------------------------------------------------------------------

	/**
	 * Receive Trackback  Data
	 *
	 * This function simply validates the incoming TB data.
	 * It returns FALSE on failure and TRUE on success.
	 * If the data is valid it is set to the $this->data array
	 * so that it can be inserted into a database.
	 *
<<<<<<< HEAD
	 * @return	bool
	 */
	public function receive()
	{
		foreach (array('url', 'title', 'blog_name', 'excerpt') as $val)
		{
			if (empty($_POST[$val]))
=======
	 * @access	public
	 * @return	bool
	 */
	function receive()
	{
		foreach (array('url', 'title', 'blog_name', 'excerpt') as $val)
		{
			if ( ! isset($_POST[$val]) OR $_POST[$val] == '')
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			{
				$this->set_error('The following required POST variable is missing: '.$val);
				return FALSE;
			}

<<<<<<< HEAD
			$this->data['charset'] = isset($_POST['charset']) ? strtoupper(trim($_POST['charset'])) : 'auto';

			if ($val !== 'url' && MB_ENABLED === TRUE)
			{
				if (MB_ENABLED === TRUE)
				{
					$_POST[$val] = mb_convert_encoding($_POST[$val], $this->charset, $this->data['charset']);
				}
				elseif (ICONV_ENABLED === TRUE)
				{
					$_POST[$val] = @iconv($this->data['charset'], $this->charset.'//IGNORE', $_POST[$val]);
				}
			}

			$_POST[$val] = ($val !== 'url') ? $this->convert_xml(strip_tags($_POST[$val])) : strip_tags($_POST[$val]);

			if ($val === 'excerpt')
=======
			$this->data['charset'] = ( ! isset($_POST['charset'])) ? 'auto' : strtoupper(trim($_POST['charset']));

			if ($val != 'url' && function_exists('mb_convert_encoding'))
			{
				$_POST[$val] = mb_convert_encoding($_POST[$val], $this->charset, $this->data['charset']);
			}

			$_POST[$val] = ($val != 'url') ? $this->convert_xml(strip_tags($_POST[$val])) : strip_tags($_POST[$val]);

			if ($val == 'excerpt')
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			{
				$_POST['excerpt'] = $this->limit_characters($_POST['excerpt']);
			}

			$this->data[$val] = $_POST[$val];
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Send Trackback Error Message
	 *
<<<<<<< HEAD
	 * Allows custom errors to be set. By default it
	 * sends the "incomplete information" error, as that's
	 * the most common one.
	 *
	 * @param	string
	 * @return	void
	 */
	public function send_error($message = 'Incomplete Information')
	{
		exit('<?xml version="1.0" encoding="utf-8"?'.">\n<response>\n<error>1</error>\n<message>".$message."</message>\n</response>");
=======
	 * Allows custom errors to be set.  By default it
	 * sends the "incomplete information" error, as that's
	 * the most common one.
	 *
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	function send_error($message = 'Incomplete Information')
	{
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">\n<response>\n<error>1</error>\n<message>".$message."</message>\n</response>";
		exit;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Send Trackback Success Message
	 *
	 * This should be called when a trackback has been
	 * successfully received and inserted.
	 *
<<<<<<< HEAD
	 * @return	void
	 */
	public function send_success()
	{
		exit('<?xml version="1.0" encoding="utf-8"?'.">\n<response>\n<error>0</error>\n</response>");
=======
	 * @access	public
	 * @return	void
	 */
	function send_success()
	{
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">\n<response>\n<error>0</error>\n</response>";
		exit;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Fetch a particular item
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	string
	 */
	public function data($item)
	{
		return isset($this->data[$item]) ? $this->data[$item] : '';
=======
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function data($item)
	{
		return ( ! isset($this->data[$item])) ? '' : $this->data[$item];
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Process Trackback
	 *
	 * Opens a socket connection and passes the data to
<<<<<<< HEAD
	 * the server. Returns TRUE on success, FALSE on failure
	 *
=======
	 * the server.  Returns TRUE on success, FALSE on failure
	 *
	 * @access	public
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
<<<<<<< HEAD
	public function process($url, $data)
=======
	function process($url, $data)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		$target = parse_url($url);

		// Open the socket
		if ( ! $fp = @fsockopen($target['host'], 80))
		{
			$this->set_error('Invalid Connection: '.$url);
			return FALSE;
		}

		// Build the path
<<<<<<< HEAD
		$path = isset($target['path']) ? $target['path'] : $url;
		empty($target['query']) OR $path .= '?'.$target['query'];
=======
		$ppath = ( ! isset($target['path'])) ? $url : $target['path'];

		$path = (isset($target['query']) && $target['query'] != "") ? $ppath.'?'.$target['query'] : $ppath;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

		// Add the Trackback ID to the data string
		if ($id = $this->get_id($url))
		{
<<<<<<< HEAD
			$data = 'tb_id='.$id.'&'.$data;
		}

		// Transfer the data
		fputs($fp, 'POST '.$path." HTTP/1.0\r\n");
		fputs($fp, 'Host: '.$target['host']."\r\n");
		fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
		fputs($fp, 'Content-length: '.strlen($data)."\r\n");
		fputs($fp, "Connection: close\r\n\r\n");
		fputs($fp, $data);

		// Was it successful?

		$this->response = '';
=======
			$data = "tb_id=".$id."&".$data;
		}

		// Transfer the data
		fputs ($fp, "POST " . $path . " HTTP/1.0\r\n" );
		fputs ($fp, "Host: " . $target['host'] . "\r\n" );
		fputs ($fp, "Content-type: application/x-www-form-urlencoded\r\n" );
		fputs ($fp, "Content-length: " . strlen($data) . "\r\n" );
		fputs ($fp, "Connection: close\r\n\r\n" );
		fputs ($fp, $data);

		// Was it successful?
		$this->response = "";

>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		while ( ! feof($fp))
		{
			$this->response .= fgets($fp, 128);
		}
		@fclose($fp);

<<<<<<< HEAD
		if (stripos($this->response, '<error>0</error>') === FALSE)
		{
			$message = preg_match('/<message>(.*?)<\/message>/is', $this->response, $match)
				? trim($match[1])
				: 'An unknown error was encountered';
=======

		if (stristr($this->response, '<error>0</error>') === FALSE)
		{
			$message = 'An unknown error was encountered';

			if (preg_match("/<message>(.*?)<\/message>/is", $this->response, $match))
			{
				$message = trim($match['1']);
			}

>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			$this->set_error($message);
			return FALSE;
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Extract Trackback URLs
	 *
	 * This function lets multiple trackbacks be sent.
	 * It takes a string of URLs (separated by comma or
	 * space) and puts each URL into an array
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	string
	 */
	public function extract_urls($urls)
	{
		// Remove the pesky white space and replace with a comma, then replace doubles.
		$urls = str_replace(',,', ',', preg_replace('/\s*(\S+)\s*/', '\\1,', $urls));

		// Break into an array via commas and remove duplicates
		$urls = array_unique(preg_split('/[,]/', rtrim($urls, ',')));

		array_walk($urls, array($this, 'validate_url'));
=======
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function extract_urls($urls)
	{
		// Remove the pesky white space and replace with a comma.
		$urls = preg_replace("/\s*(\S+)\s*/", "\\1,", $urls);

		// If they use commas get rid of the doubles.
		$urls = str_replace(",,", ",", $urls);

		// Remove any comma that might be at the end
		if (substr($urls, -1) == ",")
		{
			$urls = substr($urls, 0, -1);
		}

		// Break into an array via commas
		$urls = preg_split('/[,]/', $urls);

		// Removes duplicates
		$urls = array_unique($urls);

		array_walk($urls, array($this, 'validate_url'));

>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		return $urls;
	}

	// --------------------------------------------------------------------

	/**
	 * Validate URL
	 *
	 * Simply adds "http://" if missing
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	void
	 */
	public function validate_url(&$url)
	{
		$url = trim($url);

		if (strpos($url, 'http') !== 0)
		{
			$url = 'http://'.$url;
=======
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function validate_url($url)
	{
		$url = trim($url);

		if (substr($url, 0, 4) != "http")
		{
			$url = "http://".$url;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Find the Trackback URL's ID
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	string
	 */
	public function get_id($url)
	{
		$tb_id = '';
=======
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function get_id($url)
	{
		$tb_id = "";
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

		if (strpos($url, '?') !== FALSE)
		{
			$tb_array = explode('/', $url);
			$tb_end   = $tb_array[count($tb_array)-1];

			if ( ! is_numeric($tb_end))
			{
				$tb_end  = $tb_array[count($tb_array)-2];
			}

			$tb_array = explode('=', $tb_end);
			$tb_id	= $tb_array[count($tb_array)-1];
		}
		else
		{
			$url = rtrim($url, '/');

			$tb_array = explode('/', $url);
			$tb_id	= $tb_array[count($tb_array)-1];

			if ( ! is_numeric($tb_id))
			{
<<<<<<< HEAD
				$tb_id = $tb_array[count($tb_array)-2];
			}
		}

		return ctype_digit((string) $tb_id) ? $tb_id : FALSE;
=======
				$tb_id  = $tb_array[count($tb_array)-2];
			}
		}

		if ( ! preg_match ("/^([0-9]+)$/", $tb_id))
		{
			return FALSE;
		}
		else
		{
			return $tb_id;
		}
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Convert Reserved XML characters to Entities
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	string
	 */
	public function convert_xml($str)
	{
		$temp = '__TEMP_AMPERSANDS__';

		$str = preg_replace(array('/&#(\d+);/', '/&(\w+);/'), $temp.'\\1;', $str);

		$str = str_replace(array('&', '<', '>', '"', "'", '-'),
					array('&amp;', '&lt;', '&gt;', '&quot;', '&#39;', '&#45;'),
					$str);

		return preg_replace(array('/'.$temp.'(\d+);/', '/'.$temp.'(\w+);/'), array('&#\\1;', '&\\1;'), $str);
=======
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function convert_xml($str)
	{
		$temp = '__TEMP_AMPERSANDS__';

		$str = preg_replace("/&#(\d+);/", "$temp\\1;", $str);
		$str = preg_replace("/&(\w+);/",  "$temp\\1;", $str);

		$str = str_replace(array("&","<",">","\"", "'", "-"),
							array("&amp;", "&lt;", "&gt;", "&quot;", "&#39;", "&#45;"),
							$str);

		$str = preg_replace("/$temp(\d+);/","&#\\1;",$str);
		$str = preg_replace("/$temp(\w+);/","&\\1;", $str);

		return $str;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Character limiter
	 *
	 * Limits the string based on the character count. Will preserve complete words.
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	int
	 * @param	string
	 * @return	string
	 */
	public function limit_characters($str, $n = 500, $end_char = '&#8230;')
=======
	 * @access	public
	 * @param	string
	 * @param	integer
	 * @param	string
	 * @return	string
	 */
	function limit_characters($str, $n = 500, $end_char = '&#8230;')
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		if (strlen($str) < $n)
		{
			return $str;
		}

<<<<<<< HEAD
		$str = preg_replace('/\s+/', ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));
=======
		$str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

		if (strlen($str) <= $n)
		{
			return $str;
		}

<<<<<<< HEAD
		$out = '';
=======
		$out = "";
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		foreach (explode(' ', trim($str)) as $val)
		{
			$out .= $val.' ';
			if (strlen($out) >= $n)
			{
<<<<<<< HEAD
				return rtrim($out).$end_char;
=======
				return trim($out).$end_char;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * High ASCII to Entities
	 *
	 * Converts Hight ascii text and MS Word special chars
	 * to character entities
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	string
	 */
	public function convert_ascii($str)
=======
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function convert_ascii($str)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		$count	= 1;
		$out	= '';
		$temp	= array();

		for ($i = 0, $s = strlen($str); $i < $s; $i++)
		{
			$ordinal = ord($str[$i]);

			if ($ordinal < 128)
			{
				$out .= $str[$i];
			}
			else
			{
<<<<<<< HEAD
				if (count($temp) === 0)
=======
				if (count($temp) == 0)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
				{
					$count = ($ordinal < 224) ? 2 : 3;
				}

				$temp[] = $ordinal;

<<<<<<< HEAD
				if (count($temp) === $count)
				{
					$number = ($count === 3)
						? (($temp[0] % 16) * 4096) + (($temp[1] % 64) * 64) + ($temp[2] % 64)
						: (($temp[0] % 32) * 64) + ($temp[1] % 64);
=======
				if (count($temp) == $count)
				{
					$number = ($count == 3) ? (($temp['0'] % 16) * 4096) + (($temp['1'] % 64) * 64) + ($temp['2'] % 64) : (($temp['0'] % 32) * 64) + ($temp['1'] % 64);
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

					$out .= '&#'.$number.';';
					$count = 1;
					$temp = array();
				}
			}
		}

		return $out;
	}

	// --------------------------------------------------------------------

	/**
	 * Set error message
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	void
	 */
	public function set_error($msg)
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	function set_error($msg)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		log_message('error', $msg);
		$this->error_msg[] = $msg;
	}

	// --------------------------------------------------------------------

	/**
	 * Show error messages
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	 * @param	string
	 * @param	string
	 * @return	string
	 */
<<<<<<< HEAD
	public function display_errors($open = '<p>', $close = '</p>')
	{
		return (count($this->error_msg) > 0) ? $open.implode($close.$open, $this->error_msg).$close : '';
	}

}
=======
	function display_errors($open = '<p>', $close = '</p>')
	{
		$str = '';
		foreach ($this->error_msg as $val)
		{
			$str .= $open.$val.$close;
		}

		return $str;
	}

}
// END Trackback Class

/* End of file Trackback.php */
/* Location: ./system/libraries/Trackback.php */
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
