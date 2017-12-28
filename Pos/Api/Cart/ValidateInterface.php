<?php
/**
 * Interface PriceValidate
 */

namespace Api\Cart;

interface ValidateInterface
{
	/**
	 * Execute
	 *
	 * @param array $inventory
	 * @param string $items
	 * @return
	 */
	public function execute($inventory, $items);

	/**
	 * Calculate
	 *
	 * @param
	 */
	public function calculate($charCount, $inventory);
}