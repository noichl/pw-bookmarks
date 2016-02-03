<?php declare(strict_types = 1);

trait SimpleMocksTrait{

	private function getBookmarkMock() {
		return $this->getMockBuilder(Bookmark::class)
						->disableOriginalConstructor()
						->getMock();
	}

	private function getUrlMock() {
		return $this->getMockBuilder(Url::class)
						->disableOriginalConstructor()
						->getMock();
	}

	private function getBookmarkCommentMock() {
		return $this->getMockBuilder(BookmarkComment::class)
						->disableOriginalConstructor()
						->getMock();
	}

	private function getBookmarkCategoryMock() {
		return $this->getMockBuilder(BookmarkCategory::class)
					->disableOriginalConstructor()
					->getMock();
	}

}