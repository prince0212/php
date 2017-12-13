<?php
/**
 * OutputInterface
 */

interface OutputInterface
{
	/**
	 * getOutput
	 *
	 * @return $this
	 */
	public function getOutput();

	/**
	 * setOutput
	 *
	 * @param object $output
	 */
	public function setOutput($output);

	/**
	 * Get output type
	 *
	 * @return $this
	 */
	public function getOutputType();

	/**
	 * Set output type
	 *
	 * @param object $type
	 */
	public function setOutputType($type);
}
