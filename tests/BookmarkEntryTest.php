<?php declare(strict_types = 1);

/**
 * @covers BookmarkEntry
 */
class BookmarkEntryTest extends PHPUnit_Framework_TestCase {

	use SimpleMocksTrait;

	public function testCanRetrieveBookmark() {
		$bookmark = $this->getBookmarkMock();
		$category = $this->getBookmarkCategoryMock();

		$bookmarkEntry = new BookmarkEntry($bookmark, $category);

		$this->assertEquals($bookmark, $bookmarkEntry->getBookmark());
	}

	public function testCanRetrieveCategory() {
		$bookmark = $this->getBookmarkMock();
		$category = $this->getBookmarkCategoryMock();

		$bookmarkEntry = new BookmarkEntry($bookmark, $category);

		$this->assertEquals($category, $bookmarkEntry->getCategory());
	}
}
