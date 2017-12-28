<?php
/**
 * Interface Product
 */

namespace Api\Catalog;

interface ProductInterface
{
	/**
	 *
	 */
	public function execute($inventory);
	/**
	 * Get Name
	 *
	 * @return $this
	 */
	public function getName();

	/**
	 * Get Name
	 *
	 * @param string $name
	 */
	public function setName($name);

	/**
	 * Get unit quantity
	 *
	 * @return $this
	 */
	public function getVolumeQty();

	/**
	 * Get Name
	 *
	 * @param string $name
	 */
	public function setVolumeQty($name);

	/**
	 * getUnitPrice
	 *
	 * @return $this
	 */
	public function getUnitPrice();

	/**
	 * setUnitPrice
	 *
	 * @param flat $unitPrice
	 */
	public function setUnitPrice($unitPrice);

	/**
	 * getVolumePrice
	 *
	 * @return $this
	 */
	public function getVolumePrice();

	/**
	 * setVolumePrice
	 *
	 * @param flat $volumePrice
	 */
	public function setVolumePrice($volumePrice);
}
