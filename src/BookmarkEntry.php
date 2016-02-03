<?php declare(strict_types = 1);

class BookmarkEntry {

	/**
	 * @var Bookmark
	 */
	private $bookmark;

	/**
	 * @var BookmarkCategory
	 */
	private $category;

	/**
	 * BookmarkEntry constructor.
	 *
	 * @param Bookmark $bookmark
	 * @param BookmarkCategory $category
	 */
	public function __construct(Bookmark $bookmark, BookmarkCategory $category) {
		$this->bookmark = $bookmark;
		$this->category = $category;
	}

	/**
	 * @return Bookmark
	 */
	public function getBookmark(): Bookmark {
		return $this->bookmark;
	}

	/**
	 * @return BookmarkCategory
	 */
	public function getCategory(): BookmarkCategory {
		return $this->category;
	}
}