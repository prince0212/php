<?php
/**
 * InputInterface
 */

interface InputInterface
{
	/**
	 * Get input
	 *
	 * @return $this
	 */
	public function getInput();

	/**
	 * Set input
	 *
	 * @param object $input
	 */
	public function setInput($input);

	/**
	 * getInputType
	 *
	 * @return $this
	 */
	public function getInputType();

	/**
	 * setInputType
	 *
	 * @param object $type
	 */
	public function setInputType($type);
}
