<?php
/**
 * Consider a store where items have prices per unit but also volume
 * prices. For example, apples may be $1.00 each or 4 for $3.00.
 *
 * Implement a point-of-sale scanning API that accepts an arbitrary
 * ordering of products (similar to what would happen at a checkout line)
 * and then returns the correct total price for an entire shopping cart
 * based on the per unit prices or the volume prices as applicable.

 * Here are the products listed by code and the prices to use (there is no sales tax):
 * Product Code | Price
 * --------------------
 * A            | $2.00 each or 4 for $7.00
 * B            | $12.00
 * C            | $1.25 or $6 for a six pack
 * D            | $0.15

 * There should be a top level point of sale terminal service object that
 * looks something like the pseudo-code below. You are free to design and
 * implement the rest of the code however you wish, including how you
 * specify the prices in the system:

 * terminal->setPricing(...)
 * terminal->scan("A")
 * terminal->scan("C")
 * ... etc.
 * result = terminal->total

 * Here are the minimal inputs you should use for your test cases. These
 * test cases must be shown to work in your program:

 * Scan these items in this order: ABCDABAA; Verify the total price is $32.40.
 * Scan these items in this order: CCCCCCC; Verify the total price is $7.25.
 * Scan these items in this order: ABCD; Verify the total price is $15.40.
 */

namespace Pos;

require(__DIR__.'\Autoloader.php');

use \Model\Catalog\Product;
use \Model\Terminal;

$termianl = new Terminal();
$inventory['A'] = array('unit_price' => '2.00', 'volume_price' => '7.00', 'volume_qty' => 4);
$inventory['B'] = array('unit_price' => '12.00', 'volume_price' => null, 'volume_qty' => null);
$inventory['C'] = array('unit_price' => '1.25', 'volume_price' => '6.00', 'volume_qty' => 6);
$inventory['D'] = array('unit_price' => '0.15', 'volume_price' => null, 'volume_qty' => null);
$termianl->setPricing($inventory);

// input ABCDABAA
$result = $termianl->scan('ABCDABAA');
echo "\n Input : ABCDABAA \n Output : ".$result;

// input CCCCCCC
$result = $termianl->scan('CCCCCCC');
echo "\n Input : CCCCCCC \n Output : ".$result;

// input ABCD
$result = $termianl->scan('ABCD');
echo "\n Input : ABCD \n Output : ".$result;
