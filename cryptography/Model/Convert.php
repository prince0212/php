<?php
/**
 * Convert
 */

class Convert
{
	/**
	 * execute
	 *
	 * @param class object
	 * @param object
	 * @return object
	 */
	public function execute($type, $data)
	{
		return $type->convert($data);
	}
}