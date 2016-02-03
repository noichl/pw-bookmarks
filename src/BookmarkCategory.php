<?php declare(strict_types = 1);

class BookmarkCategory {

	/**
	 * @var string
	 */
	private $name;

	/**
	 * BookmarkCategory constructor.
	 *
	 * @param string $name
	 */
	public function __construct(string $name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}
}