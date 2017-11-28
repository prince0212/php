<?php
/**
 * Alshaya India
 *
 * Parser
 */
$workingDirectory = getcwd();
chdir(__DIR__);
require_once('..\Model\ParserInput.php');
require_once('..\Model\ParserOutput.php');
chdir($workingDirectory);
class Parser
{
	/**
	 * @var $text
	 */
	private $text;

	/**
	 * @var $stopWord
	 */
	private $stopWord;

	/**
	 * constructor
	 *
	 * @param string $text
	 * @param array $stopWord
	 * @return void
	 */
	public function __construct(
		ParserInput $parserInput, 
		ParserOutput $parserOutput
	) {
		$this->parserInput = $parserInput;
		$this->parserOutput = $parserOutput;
	}

	/**
	 * Get the input
	 *
	 */
	public function input($text, $stopWord)
	{
		$this->parserInput->setText($text);
		$this->parserInput->setStopWord($stopWord);
		$this->convertTextIntoArray($this->parserInput->getText());
	}

	/**
	 * Output
	 *
	 * @return object
	 */
	public function output()
	{
		return $this->parserOutput->getResult();
	}

	/**
	 * convert string into array
	 *
	 * @param string $text
	 * @return void
	 */
	public function convertTextIntoArray($text)
	{
		$textArray = explode(' ', $text);
		$this->removeStopWord($textArray);
	}

	/**
	 * Remove word from from text
	 * 
	 * @param array $text
	 * @return void
	 */
	public function removeStopWord($textArray)
	{
		$stopWord = $this->parserInput->getStopWord();
		$arrayDiff = array_diff($textArray, $stopWord);
		$this->wrapper($arrayDiff);
	}

	public function wrapper($arrayDiff)
	{
		foreach ($arrayDiff as $key => $value) {
			$result[$key]['word'] = $value;
			$result[$key]['count'] = count($value);
			$result[$key]['rank'] = $key+1;
		}
		$this->convertIntoJson($result);
	}

	/**
	 * Convort the string into json
	 *
	 * @param array $result
	 * @return void
	 */
	public function convertIntoJson($result)
	{
		$result = json_encode($result);
		$this->parserOutput->setResult($result);
	}
}