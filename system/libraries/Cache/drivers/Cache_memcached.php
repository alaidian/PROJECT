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
 * @since	Version 2.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright		Copyright (c) 2006 - 2014 EllisLab, Inc.
 * @copyright		Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 2.0
 * @filesource
 */

// ------------------------------------------------------------------------
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

/**
 * CodeIgniter Memcached Caching Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Core
 * @author		EllisLab Dev Team
 * @link
 */
class CI_Cache_memcached extends CI_Driver {

<<<<<<< HEAD
	/**
	 * Holds the memcached object
	 *
	 * @var object
	 */
	protected $_memcached;

	/**
	 * Memcached configuration
	 *
	 * @var array
	 */
	protected $_config = array(
		'default' => array(
			'host'		=> '127.0.0.1',
			'port'		=> 11211,
			'weight'	=> 1
		)
	);

	// ------------------------------------------------------------------------

	/**
	 * Class constructor
	 *
	 * Setup Memcache(d)
	 *
	 * @return	void
	 */
	public function __construct()
	{
		// Try to load memcached server info from the config file.
		$CI =& get_instance();
		$defaults = $this->_config['default'];

		if ($CI->config->load('memcached', TRUE, TRUE))
		{
			$this->_config = $CI->config->config['memcached'];
		}

		if (class_exists('Memcached', FALSE))
		{
			$this->_memcached = new Memcached();
		}
		elseif (class_exists('Memcache', FALSE))
		{
			$this->_memcached = new Memcache();
		}
		else
		{
			log_message('error', 'Cache: Failed to create Memcache(d) object; extension not loaded?');
			return;
		}

		foreach ($this->_config as $cache_server)
		{
			isset($cache_server['hostname']) OR $cache_server['hostname'] = $defaults['host'];
			isset($cache_server['port']) OR $cache_server['port'] = $defaults['port'];
			isset($cache_server['weight']) OR $cache_server['weight'] = $defaults['weight'];

			if ($this->_memcached instanceof Memcache)
			{
				// Third parameter is persistance and defaults to TRUE.
				$this->_memcached->addServer(
					$cache_server['hostname'],
					$cache_server['port'],
					TRUE,
					$cache_server['weight']
				);
			}
			elseif ($this->_memcached instanceof Memcached)
			{
				$this->_memcached->addServer(
					$cache_server['hostname'],
					$cache_server['port'],
					$cache_server['weight']
				);
			}
		}
	}
=======
	private $_memcached;	// Holds the memcached object

	protected $_memcache_conf 	= array(
					'default' => array(
						'default_host'		=> '127.0.0.1',
						'default_port'		=> 11211,
						'default_weight'	=> 1
					)
				);
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc

	// ------------------------------------------------------------------------

	/**
	 * Fetch from cache
	 *
<<<<<<< HEAD
	 * @param	string	$id	Cache ID
	 * @return	mixed	Data on success, FALSE on failure
=======
	 * @param 	mixed		unique key id
	 * @return 	mixed		data on success/false on failure
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	 */
	public function get($id)
	{
		$data = $this->_memcached->get($id);

<<<<<<< HEAD
		return is_array($data) ? $data[0] : $data;
=======
		return (is_array($data)) ? $data[0] : FALSE;
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// ------------------------------------------------------------------------

	/**
	 * Save
	 *
<<<<<<< HEAD
	 * @param	string	$id	Cache ID
	 * @param	mixed	$data	Data being cached
	 * @param	int	$ttl	Time to live
	 * @param	bool	$raw	Whether to store the raw value
	 * @return	bool	TRUE on success, FALSE on failure
	 */
	public function save($id, $data, $ttl = 60, $raw = FALSE)
	{
		if ($raw !== TRUE)
		{
			$data = array($data, time(), $ttl);
		}

		if ($this->_memcached instanceof Memcached)
		{
			return $this->_memcached->set($id, $data, $ttl);
		}
		elseif ($this->_memcached instanceof Memcache)
		{
			return $this->_memcached->set($id, $data, 0, $ttl);
=======
	 * @param 	string		unique identifier
	 * @param 	mixed		data being cached
	 * @param 	int			time to live
	 * @return 	boolean 	true on success, false on failure
	 */
	public function save($id, $data, $ttl = 60)
	{
		if (get_class($this->_memcached) == 'Memcached')
		{
			return $this->_memcached->set($id, array($data, time(), $ttl), $ttl);
		}
		else if (get_class($this->_memcached) == 'Memcache')
		{
			return $this->_memcached->set($id, array($data, time(), $ttl), 0, $ttl);
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
		}

		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Delete from Cache
	 *
<<<<<<< HEAD
	 * @param	mixed	$id	key to be deleted.
	 * @return	bool	true on success, false on failure
=======
	 * @param 	mixed		key to be deleted.
	 * @return 	boolean 	true on success, false on failure
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	 */
	public function delete($id)
	{
		return $this->_memcached->delete($id);
	}

	// ------------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Increment a raw value
	 *
	 * @param	string	$id	Cache ID
	 * @param	int	$offset	Step/value to add
	 * @return	mixed	New value on success or FALSE on failure
	 */
	public function increment($id, $offset = 1)
	{
		return $this->_memcached->increment($id, $offset);
	}

	// ------------------------------------------------------------------------

	/**
	 * Decrement a raw value
	 *
	 * @param	string	$id	Cache ID
	 * @param	int	$offset	Step/value to reduce by
	 * @return	mixed	New value on success or FALSE on failure
	 */
	public function decrement($id, $offset = 1)
	{
		return $this->_memcached->decrement($id, $offset);
	}

	// ------------------------------------------------------------------------

	/**
	 * Clean the Cache
	 *
	 * @return	bool	false on failure/true on success
=======
	 * Clean the Cache
	 *
	 * @return 	boolean		false on failure/true on success
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	 */
	public function clean()
	{
		return $this->_memcached->flush();
	}

	// ------------------------------------------------------------------------

	/**
	 * Cache Info
	 *
<<<<<<< HEAD
	 * @return	mixed	array on success, false on failure
	 */
	public function cache_info()
=======
	 * @param 	null		type not supported in memcached
	 * @return 	mixed 		array on success, false on failure
	 */
	public function cache_info($type = NULL)
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	{
		return $this->_memcached->getStats();
	}

	// ------------------------------------------------------------------------

	/**
	 * Get Cache Metadata
	 *
<<<<<<< HEAD
	 * @param	mixed	$id	key to get cache metadata on
	 * @return	mixed	FALSE on failure, array on success.
=======
	 * @param 	mixed		key to get cache metadata on
	 * @return 	mixed		FALSE on failure, array on success.
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	 */
	public function get_metadata($id)
	{
		$stored = $this->_memcached->get($id);

		if (count($stored) !== 3)
		{
			return FALSE;
		}

		list($data, $time, $ttl) = $stored;

		return array(
			'expire'	=> $time + $ttl,
			'mtime'		=> $time,
			'data'		=> $data
		);
	}

	// ------------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Is supported
	 *
	 * Returns FALSE if memcached is not supported on the system.
	 * If it is, we setup the memcached object & return TRUE
	 *
	 * @return	bool
	 */
	public function is_supported()
	{
		return (extension_loaded('memcached') OR extension_loaded('memcache'));
=======
	 * Setup memcached.
	 */
	private function _setup_memcached()
	{
		// Try to load memcached server info from the config file.
		$CI =& get_instance();
		if ($CI->config->load('memcached', TRUE, TRUE))
		{
			if (is_array($CI->config->config['memcached']))
			{
				$this->_memcache_conf = NULL;

				foreach ($CI->config->config['memcached'] as $name => $conf)
				{
					$this->_memcache_conf[$name] = $conf;
				}
			}
		}

		$this->_memcached = new Memcached();

		foreach ($this->_memcache_conf as $name => $cache_server)
		{
			if ( ! array_key_exists('hostname', $cache_server))
			{
				$cache_server['hostname'] = $this->_default_options['default_host'];
			}

			if ( ! array_key_exists('port', $cache_server))
			{
				$cache_server['port'] = $this->_default_options['default_port'];
			}
	
			if ( ! array_key_exists('weight', $cache_server))
			{
				$cache_server['weight'] = $this->_default_options['default_weight'];
			}
	
			$this->_memcached->addServer(
					$cache_server['hostname'], $cache_server['port'], $cache_server['weight']
			);
		}
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	}

	// ------------------------------------------------------------------------

<<<<<<< HEAD
	/**
	 * Class destructor
	 *
	 * Closes the connection to Memcache(d) if present.
	 *
	 * @return	void
	 */
	public function __destruct()
	{
		if ($this->_memcached instanceof Memcache)
		{
			$this->_memcached->close();
		}
		elseif ($this->_memcached instanceof Memcached && method_exists($this->_memcached, 'quit'))
		{
			$this->_memcached->quit();
		}
	}
}
=======

	/**
	 * Is supported
	 *
	 * Returns FALSE if memcached is not supported on the system.
	 * If it is, we setup the memcached object & return TRUE
	 */
	public function is_supported()
	{
		if ( ! extension_loaded('memcached'))
		{
			log_message('error', 'The Memcached Extension must be loaded to use Memcached Cache.');
			return FALSE;
		}

		$this->_setup_memcached();
		return TRUE;
	}

}

/* End of file Cache_memcached.php */
/* Location: ./system/libraries/Cache/drivers/Cache_memcached.php */
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
