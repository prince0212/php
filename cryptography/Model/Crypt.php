<?php
/**
 * Crypt
 */

require_once(__DIR__.'\Input.php');
require_once(__DIR__.'\Output.php');
require_once(__DIR__.'\Convert.php');
require_once(__DIR__.'\Convert\ToArray.php');
require_once(__DIR__.'\Convert\ToJson.php');
require_once(__DIR__.'\Validate\Algorithm.php');

class Crypt
{
	/**
	 * @var object
	 */
	private $input;

	/**
	 * @var format class
	 */
	private $inputType;

	/**
	 * @var format class
	 */
	private $outputType;

	/**
	 * @var input object class
	 */
	private $inputObject;

	/**
	 * @var output object class
	 */
	private $outputObject;

	/**
	 * @var object
	 */
	private $toArrayObject;

	/**
	 * @var object
	 */
	private $toJsonObject;
	
	/**
	 * @var object
	 */
	private $decryptObject;
	/**
	 * @var object
	 */
	private $encryptObject;

	/**
	 * @var object
	 */
	private $algoObject;

	/**
	 * init
	 *
	 * @param class object input type
	 * @param class object output type
	 */
	public function __construct($inputType, $outputType)
	{
		$this->inputObject 		= new Input();
		$this->outputObject 	= new Output();
		$this->convertObject	= new Convert();
		$this->toArrayObject 	= new ToArray();
		$this->toJsonObject 	= new ToJson();
		$this->algoObject 		= new Algorithm();
		$this->inputObject->setInputType($inputType);
		$this->outputObject->setOutputType($outputType);
	}

	/**
	 * execute
	 *
	 * @param object $input
	 * @return 
	 */
	public function execute($input)
	{
		$this->inputObject->setInput($input);
		$dataToDecrypt = $this->convertObject->execute($this->inputObject->getInputType(), $this->inputObject->getInput());		
		foreach ($dd as $key => $value) {
			if ($key == 'message_text') {
				$array = str_split($value);
				foreach ($array as $key => $word) {
					$dec[$key] = $this->algoObject->decrypt($word);
				}
			}
		}
	}
}
