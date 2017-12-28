<?php
/**
 * class  Price validate
 */

namespace Model\Cart;

use \Api\Cart\ValidateInterface;

class Validate implements ValidateInterface
{
	/**
	 * Execute
	 *
	 * @param array $inventory
	 * @param string $items
	 * @return
	 */
	public function execute($inventory, $items)
	{
		foreach (count_chars($items, 1) as $i => $count) {
   			if (! array_key_exists(chr($i), $inventory)) {
				throw new Exception($key.' item is not present in our inventory', 1);
				return false;
			}
   			$charCount[chr($i)] = $count;
		}
		$result = $this->calculate($charCount, $inventory);
		return $result;
	}

	/**
	 * Calculate
	 *
	 * @param array $charCount
	 * @param array $inventory
	 */
	public function calculate($charCount, $inventory)
	{
		$result = 0;
		foreach ($charCount as $key => $count) {
			if ($inventory[$key]['volume_price'] && $inventory[$key]['volume_qty']) {
				$dividend = $this->getDividend($count, $inventory[$key]['volume_qty']);
				$remender = $this->getRemender($count, $inventory[$key]['volume_qty']);
				$result += ($dividend*$inventory[$key]['volume_price']) + ($remender*$inventory[$key]['unit_price']);
				continue;
			}
			$result += $count*$inventory[$key]['unit_price'];
		}
		return $result;
	}

	/**
	 * Get dividend
	 *
	 * @param int $count
	 * @param int $volumeQty
	 * @return int
	 */
	private function getDividend($count, $volumeQty)
	{
		$dividend = floor($count / $volumeQty);
		return $dividend;
	}

	/**
	 * Get remender
	 *
	 * @param int $count
	 * @param int $volumeQty
	 * @return int
	 */
	private function getRemender($count, $volumeQty)
	{
		$remender = $count % $volumeQty;
		return $remender;
	}
}
