<?php
/**
 * Decryption service
 * Build a service that decrypts an encoded message – 
 * 1.	Accept an encoded message in the following format
 * {
 *    ‘message_id’ : 1,
 *    ‘message_text’ : ‘1234 6464 5675 21’
 * }
 * 2.	Return the decoded message by applying a decryption algorithm
 * A = 0
 * B = 1
 * C = 2
 * .
 * .
 * J = 9
 * 3.	Return format is as follows
 * {
 *    ‘message_id’ : 1,
 *    ‘message_text’ : ‘bcde gege fghf cb’
 * }
 */

try {
	require_once (__DIR__ .'\Model\Crypt.php');
	require_once (__DIR__ .'\Model\Convert\ToJson.php');
} catch (Exception $e) {
	echo $e->getMessage();
}

$jsonInput = '{"message_id":1,"message_text":"1234 6464 5675 21"}';
$crypt = new Crypt(new ToJson(), new ToJson());
print_r($crypt->execute($jsonInput));
