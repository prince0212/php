<?php

interface AlgorithmInterface
{
	/**
	 * encrypt
	 *
	 * @param object $data
	 * @return $this
	 */
	public function encrypt($data);

	/**
	 * decrypt
	 *
	 * @param object $data
	 * @return $this
	 */
	public function decrypt($data);
}