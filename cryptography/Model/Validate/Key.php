<?php
/**
 * Key
 */

require_once(__DIR__.'\..\..\Api\Validate\KeyInterface.php');

class Key implements KeyInterface
{
	/**
	 * @var object
	 */
	//private $key = [0 => 'A', 1 => 'B', 2 => 'C', 3 => 'D', 4 => 'E', 5 => 'F' , 6 => 'G', 7 => 'H', 8 => 'I', 9 => 'J'];
	private $key = ['A' => '0', 'B' => '1', 'C' => '2', 'D' => '3', 'E' => '4', 'F' => '5' , 'G' => '6', 'H' => '7', 'I' => '8', 'J' => '9', ' ' => ' '];

	/**
	 * Get key
	 *
	 * @return $this
	 */
	public function getKey()
	{
		return $this->key;
	}
}
