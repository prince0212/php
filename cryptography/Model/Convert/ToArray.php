<?php
/**
 * ToArray
 */

require_once(__DIR__ .'\..\..\Api\Convertor\ToArrayInterface.php');

class ToArray implements ToArrayInterface
{
	/**
	 * @var object
	 */
	private $data;

	/**
	 * convert
	 *
	 * @param object $data
	 * @return object
	 */
	public function convert($data)
	{
		$this->data = json_encode($data);
		return $this->data;
	}
}