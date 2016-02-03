<?php declare(strict_types = 1);

/**
 * @covers Bookmark
 */
class BookmarkTest extends PHPUnit_Framework_TestCase {

	use SimpleMocksTrait;

	public function testGetsComment() {
		$url = $this->getUrlMock();
		$comment = $this->getBookmarkCommentMock();
		$date = new DateTimeImmutable();

		$bookmark = new Bookmark($url, $comment, $date);

		$this->assertEquals($comment, $bookmark->getComment());
	}

	public function testGetsUrl() {
		$url = $this->getUrlMock();
		$comment = $this->getBookmarkCommentMock();
		$date = new DateTimeImmutable();

		$bookmark = new Bookmark($url, $comment, $date);

		$this->assertEquals($url, $bookmark->getWebsite());
	}

}
