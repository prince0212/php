<?php
/**
 * Alshaya India
 *
 * Excerise 
 * Create a parser that will –
 * 1. 	Accept a string of text (no limit on size of the string)
 * 		Sample input – "Lorem ipsum dolor sit amet, ex his altera latine"
 * 2. 	Accept a list of stop-words as a numerical array
 * 3.	Sanitize the string – remove special characters, unwanted spaces etc.
 * 4.	Return a list of words sorted in descending order, by the number of times it occurs in the string. Stop-words from point 2 should be ignored.
 * 		Sample output – 
 * 		{
 *			{
 *				'word' 	: 'altera'
 *              'count' : 1
 *              'rank' 	: 1
 *          },
 * 			{              
 *             	'word' 	: 'amet'
 *              'count' : 1
 *              'rank'	: 2
 *			}
 * 		}
 * 5.	Return format can be specified, supported output formats should be JSON and array.
 */

try {
	require_once (__DIR__ .'\Model\Parser.php');	
	require_once (__DIR__ .'\Model\ParserInput.php');
	require_once (__DIR__ .'\Model\ParserOutput.php');
} catch (Exception $e) {
	echo $e->getMessage();
}
$text = 'My name is prince kumar';
$stopWord = array('name','prince');
$object = new Parser(new ParserInput(), new ParserOutput());
$object->input($text, $stopWord);
echo '<pre>';
echo $object->output();