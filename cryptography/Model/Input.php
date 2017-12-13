<?php
/**
 * Input
 */

require_once(__DIR__.'\..\Api\InputInterface.php');

class Input implements InputInterface
{
	/**
	 * @var object
	 */
	private $input;

	/**
	 * @var format
	 */
	private $type;

	/**
	 * Get Input
	 *
	 * @return $this
	 */
	public function getInput()
	{
		return $this->input;
	}

	/**
	 * Set Input
	 *
	 * @param object $input
	 */
	public function setInput($input)
	{
		$this->input = $input;
	}

	/**
	 * Get input type
	 *
	 * @return $this
	 */
	public function getInputType()
	{
		return $this->type;
	}

	/**
	 * Set input type
	 *
	 * @param format $type
	 */
	public function setInputType($type)
	{
		$this->type = $type;
	}
}
