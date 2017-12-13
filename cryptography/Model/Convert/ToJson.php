<?php
/**
 * ToJson
 */

require_once(__DIR__ .'\..\..\Api\Convertor\ToJsonInterface.php');

class ToJson implements ToJsonInterface
{
	/**
	 * @var object
	 */
	private $data;

	/**
	 * convert
	 * 
	 * @param $data
	 * @return $this
	 */
	public function convert($data)
	{
		$this->data = json_decode($data);
		return $this->data;
	}
}