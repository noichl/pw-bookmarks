<?php declare(strict_types = 1);

/**
 * @covers BookmarkCategory
 */
class BookmarkCategoryTest extends PHPUnit_Framework_TestCase {

	public function testCanRetrieveName() {
		$name = "Testkategorie";
		$category = new BookmarkCategory($name);

		$this->assertSame($name, $category->getName());
	}
}
