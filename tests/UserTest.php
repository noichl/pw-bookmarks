<?php

/**
 * @covers User
 * @uses MailAddress
 */
class UserTest extends \PHPUnit_Framework_TestCase {


	public function testGetsTheUsersEmailAddress() {
		$mail = new MailAddress("test@test.de");
		$user = new User($mail);

		$this->assertEquals($mail, $user->getMailAddress());
	}
}
