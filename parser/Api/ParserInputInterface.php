<?php
/**
 * Alshaya India
 *
 * ParserInputInterface
 */

interface ParserInputInterface
{
	/**
	 * Get text
	 *
	 * @return string
	 */
	public function getText();

	/**
	 * Get stop word
	 *
	 * @return array
	 */
	public function getStopWord();

	/**
	 * Set text
	 *
	 * @param string $text
	 * @return $this
	 */
	public function setText($text);

	/**
	 * Set stop word
	 *
	 * @param array $stopWord
	 * @return $this
	 */
	public function setStopWord($stopWord);
}
