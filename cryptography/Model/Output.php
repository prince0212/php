<?php
/**
 * Output
 */

require_once(__DIR__.'\..\Api\OutputInterface.php');

class Output implements OutputInterface
{
	/**
	 * @var object
	 */
	private $output;

	/**
	 * @var type
	 */
	private $type;

	/**
	 * Get Output
	 *
	 * @return $this
	 */
	public function getOutput()
	{
		$this->output;
	}

	/**
	 * Set Output
	 *
	 * @param object $output
	 */
	public function setOutput($output)
	{
		$this->output = $output;
	}

	/**
	 * getInputType
	 *
	 * @return $this
	 */
	public function getOutputType()
	{
		return $this->type;
	}

	/**
	 * setInputType
	 *
	 * @param format $type
	 */
	public function setOutputType($type)
	{
		$this->type = $type;
	}
}
