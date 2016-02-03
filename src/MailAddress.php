<?php

/**
 * Class MailAddress represents a mail address.
 */
class MailAddress {

	/**
	 * @var string
	 */
	private $address;

	/**
	 * MailAddress constructor.
	 *
	 * @param string $address
	 *
	 * @throws InvalidArgumentException
	 */
	public function __construct(string $address) {

		if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
			throw new \InvalidArgumentException('Invalid mail address!', 1447939947729);
		}

		$this->address = $address;
	}

	function __toString() {
		return $this->address;
	}
}
