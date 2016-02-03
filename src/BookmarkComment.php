<?php declare(strict_types = 1);

class BookmarkComment {

	/**
	 * @var string
	 */
	private $text;

	/**
	 * BookmarkComment constructor.
	 *
	 * @param string $text
	 */
	public function __construct(string $text) {
		$this->text = $text;
	}

	/**
	 * Gets the comments text.
	 *
	 * @return string
	 */
	public function getText(): string{
		return $this->text;
	}
}