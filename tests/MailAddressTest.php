<?php

/**
 * @covers MailAddress
 */
class MailAddressTest extends \PHPUnit_Framework_TestCase {

	public function validMailAddressesProvider() {
		return [
			['name@domain.com'],
		];
	}

	public function inValidMailAddressesProvider() {
		return [
			['name@'],
			['name@domain'],
			['@domain.de'],
			['test@'],
			['www.test.de'],
			[''],
			[FALSE],
			[TRUE],
		];
	}

	/**
	 * @dataProvider validMailAddressesProvider
	 */
	public function testAcceptsValidMailAddress($testAddress) {
		$mail = new MailAddress($testAddress);
		$this->assertEquals($testAddress, (string)$mail);
	}

	/**
	 * @dataProvider inValidMailAddressesProvider
	 */
	public function testThrowsExceptionOnInvalidMailAddress($testAddress) {
		$this->setExpectedException(\InvalidArgumentException::class);
		$mail = new MailAddress($testAddress);
	}
}
