<?php
/**
 * Algorithm
 */

require_once(__DIR__.'\..\..\Api\Validate\AlgorithmInterface.php');
require_once(__DIR__.'\Key.php');

class Algorithm extends Key implements AlgorithmInterface
{
	
	/**
	 * encrypt
	 *
	 * @param object $data
	 * @return $this
	 */
	public function encrypt($data)
	{
		return array_search($data, $this->getKey());
	}

	/**
	 * decrypt
	 *
	 * @param object $data
	 * @return $this
	 */
	public function decrypt($data)
	{
		return array_search($data, $this->getKey());
	}
}