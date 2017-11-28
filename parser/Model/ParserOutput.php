<?php
/**
 * Alshaya India
 *
 * ParserInput
 *
 */
$workingDirectory = getcwd();
chdir(__DIR__);
require_once('../Api/ParserOutputInterface.php');
chdir($workingDirectory);
class ParserOutput implements  ParserOutputInterface
{
	/**
	 * @var string $text
	 */
	private $result;

	/**
	 * {@inheritDoc}
	 *
	 * @return string
	 */
	public function getResult()
	{
		return $this->result;
	}

	/**
	 * {@inheritDoc}
	 *
	 * @return array
	 */
	public function setResult($result)
	{
		$this->result = $result;
	}
}
