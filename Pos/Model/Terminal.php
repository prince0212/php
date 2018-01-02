<?php
/**
 * Terminal
 */

namespace Model;

use \Model\Catalog\Product;
use \Model\Cart\Validate;

class Terminal
{
	/**
	 * @var Api\Catalog ProductInterface
	 */
	private $product;

	/**
	 * @var Api\Cart ValidateInterface
	 */
	private $validate;

	/**
	 * @var array
	 */
	private $data;

	/**
	 * construct
	 * create an object for required class
	 */
	public function __construct()
	{
		$this->product = new Product();
		$this->validate = new Validate();
	}

	/**
	 * @var array
	 */
	private $inventory;

	/**
	 * @var string
	 */
	private $items;

	/**
	 * Set inventory
	 *
	 * @param array $inventory
	 */
	public function setPricing($inventory)
	{
		$this->data = $this->product->execute($inventory);
	}

	/**
	 * Add product into cart
	 * 
	 * @param string $items
	 */
	public function scan($items)
	{
		$result = $this->validate->execute($this->data, $items);
		return $result;
	}
}
