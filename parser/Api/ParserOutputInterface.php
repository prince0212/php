<?php
/**
 * Alshaya India
 *
 * ParserOutputInterface
 */

interface ParserOutputInterface 
{
	/**
	 * Get result
	 *
	 * @return object
	 */
	public function getResult();

	/**
	 * Set result
	 *
	 * @param object $result
	 * @return this
	 */
	public function setResult($result);
}
