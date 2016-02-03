<?php

/**
 * Class User represents an User
 */
class User {

	/**
	 * @var MailAddress
	 */
	private $mailAddress;

	/**
	 * User constructor.
	 *
	 * @param \MailAddress $mailAddress
	 */
	public function __construct(MailAddress $mailAddress) {
		$this->mailAddress = $mailAddress;
	}

	/**
	 * @return MailAddress
	 */
	public function getMailAddress(): MailAddress{
		return $this->mailAddress;
	}
}