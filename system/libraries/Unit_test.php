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
 * @since	Version 1.3.1
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
 * @since		Version 1.3.1
 * @filesource
 */

// ------------------------------------------------------------------------
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

/**
 * Unit Testing Class
 *
 * Simple testing class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	UnitTesting
 * @author		EllisLab Dev Team
<<<<<<< HEAD
 * @link		https://codeigniter.com/user_guide/libraries/unit_testing.html
 */
class CI_Unit_test {

	/**
	 * Active flag
	 *
	 * @var	bool
	 */
	public $active = TRUE;

	/**
	 * Test results
	 *
	 * @var	array
	 */
	public $results = array();

	/**
	 * Strict comparison flag
	 *
	 * Whether to use === or == when comparing
	 *
	 * @var	bool
	 */
	public $strict = FALSE;

	/**
	 * Template
	 *
	 * @var	string
	 */
	protected $_template = NULL;

	/**
	 * Template rows
	 *
	 * @var	string
	 */
	protected $_template_rows = NULL;

	/**
	 * List of visible test items
	 *
	 * @var	array
	 */
	protected $_test_items_visible	= array(
		'test_name',
		'test_datatype',
		'res_datatype',
		'result',
		'file',
		'line',
		'notes'
	);

	// --------------------------------------------------------------------

	/**
	 * Constructor
	 *
	 * @return	void
	 */
	public function __construct()
	{
		log_message('info', 'Unit Testing Class Initialized');
=======
 * @link		http://codeigniter.com/user_guide/libraries/uri.html
 */
class CI_Unit_test {

	var $active					= TRUE;
	var $results				= array();
	var $strict					= FALSE;
	var $_template				= NULL;
	var $_template_rows			= NULL;
	var $_test_items_visible	= array();

	public function __construct()
	{
		// These are the default items visible when a test is run.
		$this->_test_items_visible = array (
							'test_name',
							'test_datatype',
							'res_datatype',
							'result',
							'file',
							'line',
							'notes'
						);

		log_message('debug', "Unit Testing Class Initialized");
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Run the tests
	 *
	 * Runs the supplied tests
	 *
<<<<<<< HEAD
	 * @param	array	$items
	 * @return	void
	 */
	public function set_test_items($items)
	{
		if ( ! empty($items) && is_array($items))
=======
	 * @access	public
	 * @param	array
	 * @return	void
	 */
	function set_test_items($items = array())
	{
		if ( ! empty($items) AND is_array($items))
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		{
			$this->_test_items_visible = $items;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Run the tests
	 *
	 * Runs the supplied tests
	 *
<<<<<<< HEAD
	 * @param	mixed	$test
	 * @param	mixed	$expected
	 * @param	string	$test_name
	 * @param	string	$notes
	 * @return	string
	 */
	public function run($test, $expected = TRUE, $test_name = 'undefined', $notes = '')
	{
		if ($this->active === FALSE)
=======
	 * @access	public
	 * @param	mixed
	 * @param	mixed
	 * @param	string
	 * @return	string
	 */
	function run($test, $expected = TRUE, $test_name = 'undefined', $notes = '')
	{
		if ($this->active == FALSE)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		{
			return FALSE;
		}

<<<<<<< HEAD
		if (in_array($expected, array('is_object', 'is_string', 'is_bool', 'is_true', 'is_false', 'is_int', 'is_numeric', 'is_float', 'is_double', 'is_array', 'is_null', 'is_resource'), TRUE))
		{
			$expected = str_replace('is_double', 'is_float', $expected);
			$result = $expected($test);
=======
		if (in_array($expected, array('is_object', 'is_string', 'is_bool', 'is_true', 'is_false', 'is_int', 'is_numeric', 'is_float', 'is_double', 'is_array', 'is_null'), TRUE))
		{
			$expected = str_replace('is_float', 'is_double', $expected);
			$result = ($expected($test)) ? TRUE : FALSE;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			$extype = str_replace(array('true', 'false'), 'bool', str_replace('is_', '', $expected));
		}
		else
		{
<<<<<<< HEAD
			$result = ($this->strict === TRUE) ? ($test === $expected) : ($test == $expected);
=======
			if ($this->strict == TRUE)
				$result = ($test === $expected) ? TRUE : FALSE;
			else
				$result = ($test == $expected) ? TRUE : FALSE;

>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			$extype = gettype($expected);
		}

		$back = $this->_backtrace();

<<<<<<< HEAD
		$report = array (
			'test_name'     => $test_name,
			'test_datatype' => gettype($test),
			'res_datatype'  => $extype,
			'result'        => ($result === TRUE) ? 'passed' : 'failed',
			'file'          => $back['file'],
			'line'          => $back['line'],
			'notes'         => $notes
		);

		$this->results[] = $report;

		return $this->report($this->result(array($report)));
=======
		$report[] = array (
							'test_name'			=> $test_name,
							'test_datatype'		=> gettype($test),
							'res_datatype'		=> $extype,
							'result'			=> ($result === TRUE) ? 'passed' : 'failed',
							'file'				=> $back['file'],
							'line'				=> $back['line'],
							'notes'				=> $notes
						);

		$this->results[] = $report;

		return($this->report($this->result($report)));
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Generate a report
	 *
	 * Displays a table with the test data
	 *
<<<<<<< HEAD
	 * @param	array	 $result
	 * @return	string
	 */
	public function report($result = array())
	{
		if (count($result) === 0)
=======
	 * @access	public
	 * @return	string
	 */
	function report($result = array())
	{
		if (count($result) == 0)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		{
			$result = $this->result();
		}

		$CI =& get_instance();
		$CI->load->language('unit_test');

		$this->_parse_template();

		$r = '';
		foreach ($result as $res)
		{
			$table = '';

			foreach ($res as $key => $val)
			{
<<<<<<< HEAD
				if ($key === $CI->lang->line('ut_result'))
				{
					if ($val === $CI->lang->line('ut_passed'))
					{
						$val = '<span style="color: #0C0;">'.$val.'</span>';
					}
					elseif ($val === $CI->lang->line('ut_failed'))
=======
				if ($key == $CI->lang->line('ut_result'))
				{
					if ($val == $CI->lang->line('ut_passed'))
					{
						$val = '<span style="color: #0C0;">'.$val.'</span>';
					}
					elseif ($val == $CI->lang->line('ut_failed'))
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
					{
						$val = '<span style="color: #C00;">'.$val.'</span>';
					}
				}

<<<<<<< HEAD
				$table .= str_replace(array('{item}', '{result}'), array($key, $val), $this->_template_rows);
=======
				$temp = $this->_template_rows;
				$temp = str_replace('{item}', $key, $temp);
				$temp = str_replace('{result}', $val, $temp);
				$table .= $temp;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			}

			$r .= str_replace('{rows}', $table, $this->_template);
		}

		return $r;
	}

	// --------------------------------------------------------------------

	/**
	 * Use strict comparison
	 *
	 * Causes the evaluation to use === rather than ==
	 *
<<<<<<< HEAD
	 * @param	bool	$state
	 * @return	void
	 */
	public function use_strict($state = TRUE)
	{
		$this->strict = (bool) $state;
=======
	 * @access	public
	 * @param	bool
	 * @return	null
	 */
	function use_strict($state = TRUE)
	{
		$this->strict = ($state == FALSE) ? FALSE : TRUE;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Make Unit testing active
	 *
	 * Enables/disables unit testing
	 *
<<<<<<< HEAD
	 * @param	bool
	 * @return	void
	 */
	public function active($state = TRUE)
	{
		$this->active = (bool) $state;
=======
	 * @access	public
	 * @param	bool
	 * @return	null
	 */
	function active($state = TRUE)
	{
		$this->active = ($state == FALSE) ? FALSE : TRUE;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Result Array
	 *
	 * Returns the raw result data
	 *
<<<<<<< HEAD
	 * @param	array	$results
	 * @return	array
	 */
	public function result($results = array())
=======
	 * @access	public
	 * @return	array
	 */
	function result($results = array())
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		$CI =& get_instance();
		$CI->load->language('unit_test');

<<<<<<< HEAD
		if (count($results) === 0)
=======
		if (count($results) == 0)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		{
			$results = $this->results;
		}

		$retval = array();
		foreach ($results as $result)
		{
			$temp = array();
			foreach ($result as $key => $val)
			{
				if ( ! in_array($key, $this->_test_items_visible))
				{
					continue;
				}
<<<<<<< HEAD
				elseif (in_array($key, array('test_name', 'test_datatype', 'test_res_datatype', 'result'), TRUE))
				{
					if (FALSE !== ($line = $CI->lang->line(strtolower('ut_'.$val), FALSE)))
					{
						$val = $line;
					}
				}

				$temp[$CI->lang->line('ut_'.$key, FALSE)] = $val;
=======

				if (is_array($val))
				{
					foreach ($val as $k => $v)
					{
						if (FALSE !== ($line = $CI->lang->line(strtolower('ut_'.$v))))
						{
							$v = $line;
						}
						$temp[$CI->lang->line('ut_'.$k)] = $v;
					}
				}
				else
				{
					if (FALSE !== ($line = $CI->lang->line(strtolower('ut_'.$val))))
					{
						$val = $line;
					}
					$temp[$CI->lang->line('ut_'.$key)] = $val;
				}
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
			}

			$retval[] = $temp;
		}

		return $retval;
	}

	// --------------------------------------------------------------------

	/**
	 * Set the template
	 *
	 * This lets us set the template to be used to display results
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	void
	 */
	public function set_template($template)
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	function set_template($template)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		$this->_template = $template;
	}

	// --------------------------------------------------------------------

	/**
	 * Generate a backtrace
	 *
	 * This lets us show file names and line numbers
	 *
<<<<<<< HEAD
	 * @return	array
	 */
	protected function _backtrace()
	{
		$back = debug_backtrace();
		return array(
			'file' => (isset($back[1]['file']) ? $back[1]['file'] : ''),
			'line' => (isset($back[1]['line']) ? $back[1]['line'] : '')
		);
=======
	 * @access	private
	 * @return	array
	 */
	function _backtrace()
	{
		if (function_exists('debug_backtrace'))
		{
			$back = debug_backtrace();

			$file = ( ! isset($back['1']['file'])) ? '' : $back['1']['file'];
			$line = ( ! isset($back['1']['line'])) ? '' : $back['1']['line'];

			return array('file' => $file, 'line' => $line);
		}
		return array('file' => 'Unknown', 'line' => 'Unknown');
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Get Default Template
	 *
<<<<<<< HEAD
	 * @return	string
	 */
	protected function _default_template()
	{
		$this->_template = "\n".'<table style="width:100%; font-size:small; margin:10px 0; border-collapse:collapse; border:1px solid #CCC;">{rows}'."\n</table>";

		$this->_template_rows = "\n\t<tr>\n\t\t".'<th style="text-align: left; border-bottom:1px solid #CCC;">{item}</th>'
					."\n\t\t".'<td style="border-bottom:1px solid #CCC;">{result}</td>'."\n\t</tr>";
=======
	 * @access	private
	 * @return	string
	 */
	function _default_template()
	{
		$this->_template = "\n".'<table style="width:100%; font-size:small; margin:10px 0; border-collapse:collapse; border:1px solid #CCC;">';
		$this->_template .= '{rows}';
		$this->_template .= "\n".'</table>';

		$this->_template_rows = "\n\t".'<tr>';
		$this->_template_rows .= "\n\t\t".'<th style="text-align: left; border-bottom:1px solid #CCC;">{item}</th>';
		$this->_template_rows .= "\n\t\t".'<td style="border-bottom:1px solid #CCC;">{result}</td>';
		$this->_template_rows .= "\n\t".'</tr>';
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// --------------------------------------------------------------------

	/**
	 * Parse Template
	 *
	 * Harvests the data within the template {pseudo-variables}
	 *
<<<<<<< HEAD
	 * @return	void
	 */
	protected function _parse_template()
	{
		if ($this->_template_rows !== NULL)
		{
			return;
		}

		if ($this->_template === NULL OR ! preg_match('/\{rows\}(.*?)\{\/rows\}/si', $this->_template, $match))
=======
	 * @access	private
	 * @return	void
	 */
	function _parse_template()
	{
		if ( ! is_null($this->_template_rows))
		{
			return;
		}

		if (is_null($this->_template))
		{
			$this->_default_template();
			return;
		}

		if ( ! preg_match("/\{rows\}(.*?)\{\/rows\}/si", $this->_template, $match))
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		{
			$this->_default_template();
			return;
		}

<<<<<<< HEAD
		$this->_template_rows = $match[1];
		$this->_template = str_replace($match[0], '{rows}', $this->_template);
	}

}

/**
 * Helper function to test boolean TRUE
 *
 * @param	mixed	$test
=======
		$this->_template_rows = $match['1'];
		$this->_template = str_replace($match['0'], '{rows}', $this->_template);
	}

}
// END Unit_test Class

/**
 * Helper functions to test boolean true/false
 *
 *
 * @access	private
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
 * @return	bool
 */
function is_true($test)
{
<<<<<<< HEAD
	return ($test === TRUE);
}

/**
 * Helper function to test boolean FALSE
 *
 * @param	mixed	$test
 * @return	bool
 */
function is_false($test)
{
	return ($test === FALSE);
}
=======
	return (is_bool($test) AND $test === TRUE) ? TRUE : FALSE;
}
function is_false($test)
{
	return (is_bool($test) AND $test === FALSE) ? TRUE : FALSE;
}


/* End of file Unit_test.php */
/* Location: ./system/libraries/Unit_test.php */
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
