<?php
/**
 * Class Product
 */

namespace Model\Catalog;

use \Api\Catalog\ProductInterface;

class Product implements ProductInterface
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var flaot
	 */
	private $unitPrice;

	/**
	 * @var int
	 */
	private $volumeQty;

	/**
	 * @var flaot
	 */
	private $volumePrice;

	/**
	 * Execute
	 *
	 * @param array $inventory
	 */
	public function execute($inventory)
	{
		foreach ($inventory as $key => $product) {
			$this->setName($key);
			$this->setUnitPrice($product['unit_price']);
			$this->setVolumeQty($product['volume_qty']);
			$this->setVolumePrice($product['volume_price']);
			$data[$key]['unit_price'] = $this->getUnitPrice();
			$data[$key]['volume_qty'] = $this->getVolumeQty();
			$data[$key]['volume_price'] = $this->getVolumePrice();
		}
		return $data;
	}

	/**
	 * Get product name
	 *
	 * @return $this
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set product name
	 *
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * Get unit price
	 *
	 * @return float
	 */
	public function getUnitPrice()
	{
		return $this->unitPrice;
	}

	/**
	 * Get unit price
	 *
	 * @return float $unitPrice
	 */
	public function setUnitPrice($unitPrice)
	{
		$this->unitPrice = $unitPrice;
	}

	/**
	 * Get Quantity
	 *
	 * @return $this
	 */
	public function getVolumeQty()
	{
		return $this->volumeQty;
	}

	/**
	 * Set quantity
	 *
	 * @return int
	 */
	public function setVolumeQty($volumeQty)
	{
		$this->volumeQty = $volumeQty;
	}

	/**
	 * Get unit price
	 *
	 * @return float 
	 */
	public function getVolumePrice()
	{
		return $this->volumePrice;
	}

	/**
	 * Get unit price
	 *
	 * @return float $unitPrice
	 */
	public function setVolumePrice($volumePrice)
	{
		$this->volumePrice = $volumePrice;
	}
}
