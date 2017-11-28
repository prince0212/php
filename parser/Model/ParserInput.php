<?php
/**
 * Alshaya India
 *
 * ParserInput
 *
 */
$workingDirectory = getcwd();
chdir(__DIR__);
require_once('../Api/ParserInputInterface.php');
chdir($workingDirectory);
class ParserInput implements ParserInputInterface
{
	/**
	 * @var string $text
	 */
	private $text;

	/**
	 * @var array $stopWord
	 */
	private $stopWord = array();

	/**
	 * {@inheritDoc}
	 *
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * {@inheritDoc}
	 *
	 * @return array
	 */
	public function getStopWord()
	{
		return $this->stopWord;
	}

	/**
	 * {@inheritDoc}
	 *
	 * @param string $text
	 * @return $this
	 */
	public function setText($text)
	{
		$this->text = $text;
	}

	/**
	 * {@inheritDoc}
	 *
	 * @param array $stopWord
	 * @return $this
	 */
	public function setStopWord($stopWord)
	{
		$this->stopWord = $stopWord;
	}
}
