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
	 * @var BookmarkEntryCollection
	 */
	private $bookmarks;

	/**
	 * User constructor.
	 *
	 * @param \MailAddress $mailAddress
	 */
	public function __construct(MailAddress $mailAddress, BookmarkEntryCollection $bookmarks) {
		$this->mailAddress = $mailAddress;
		$this->bookmarks = $bookmarks;
	}

	/**
	 * @return MailAddress
	 */
	public function getMailAddress(): MailAddress{
		return $this->mailAddress;
	}

	/**
	 * @return BookmarkEntryCollection
	 */
	public function getBookmarks() {
		return $this->bookmarks;
	}

	public function addBookmark(Bookmark $bookmark, BookmarkCategory $category = null){
		if ($category === null){
			$category = new BookmarkCategory('Standard');
		}
		$bookmarkEntry = new BookmarkEntry($bookmark, $category);
		$this->bookmarks->add($bookmarkEntry);
	}
}