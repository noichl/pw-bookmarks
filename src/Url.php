<?php declare(strict_types = 1);

class Url {

	/**
	 * @var string
	 */
	private $address;

	/**
	 * Url constructor.
	 *
	 * @param string $address
	 */
	public function __construct(string $address) {

		$this->ensureAddressIsUrlConform($address);

		$this->address = $address;
	}

	/**
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}

	private function ensureAddressIsUrlConform(string $address) {
		if(filter_var($address, FILTER_VALIDATE_URL) === FALSE){
			throw new InvalidArgumentException('Url is not RFC conform', 1454496946108);
		}
	}
}