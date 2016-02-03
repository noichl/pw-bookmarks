<?php declare(strict_types = 1);

/**
 * @covers BookmarkComment
 */
class BookmarkCommentTest extends PHPUnit_Framework_TestCase {


	public function testGetsTheCommentsText() {
		$text = "Ein Test";
		$comment = new BookmarkComment($text);

		$this->assertSame($text, $comment->getText());
	}
}
