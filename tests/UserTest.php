<?php

/**
 * @covers User
 * @uses MailAddress
 * @uses BookmarkEntryCollection
 * @uses BookmarkEntry
 * @uses BookmarkCategory
 */
class UserTest extends \PHPUnit_Framework_TestCase {

	use SimpleMocksTrait;

	public function testGetsTheUsersEmailAddress() {
		$mail = new MailAddress("test@test.de");
		$user = new User($mail, $this->getBookmarkEntryCollectionMock());

		$this->assertEquals($mail, $user->getMailAddress());
	}

	public function testBookmarksCanBeAdded() {
		$mail = new MailAddress("test@test.de");
		$bookmark = $this->getBookmarkMock();
		$collection = new BookmarkEntryCollection();
		$user = new User($mail, $collection);

		$user->addBookmark($bookmark);

		$this->assertEquals($bookmark, iterator_to_array($user->getBookmarks()->getIterator())[0]->getBookmark());
	}


}
