<?php declare(strict_types = 1);

/**
 * @covers Url
 */
class UrlTest extends PHPUnit_Framework_TestCase {

	public function testGetsAddress() {
		$testUrlString = "http://www.test.de";
		$url = new Url($testUrlString);

		$this->assertEquals($testUrlString, $url->getAddress());
	}

	/**
	 * @dataProvider validUrlAddressesProvider
	 */
	public function testAcceptsValidAddresses($testAddress) {
		$url = new Url($testAddress);
		$this->assertSame($testAddress, $url->getAddress());
	}

	/**
	 * @dataProvider inValidUrlAddressesProvider
	 */
	public function testThrowsExceptionOnInvalidAddresses($testAddress) {
		$this->setExpectedException(InvalidArgumentException::class);
		$url = new Url($testAddress);
	}


	public function validUrlAddressesProvider() {
		return [
			['http://www.domain.com'],
			['http://www.domain.com:3000'],
		];
	}

	public function inValidUrlAddressesProvider() {
		return [
			['name@'],
			['name@domain'],
			['www.domain.com'],
			['@domain.de'],
			['test@'],
			['']
		];
	}
}
