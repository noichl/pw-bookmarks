<?php declare(strict_types = 1);

class BookmarkEntryCollection implements Countable, IteratorAggregate {

	/**
	 * @var SplObjectStorage
	 */
	private $entries;

	public function __construct() {
		$this->entries = new SplObjectStorage();
	}

	public function add(BookmarkEntry $entry) {
		$this->entries->attach($entry);
	}

	public function remove(BookmarkEntry $entry) {
		$this->entries->detach($entry);
	}

	public function getIterator() {
		return $this->entries;
	}

	public function count() {
		return count($this->entries);
	}
}