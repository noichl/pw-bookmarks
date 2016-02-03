<?php declare(strict_types = 1);

class Bookmark {

	/**
	 * @var Url
	 */
	private $website;

	/**
	 * @var BookmarkComment
	 */
	private $comment;

	/**
	 * @var DateTimeImmutable
	 */
	private $creationDate;

	/**
	 * Bookmark constructor.
	 *
	 * @param Url $website
	 * @param BookmarkComment $comment
	 * @param DateTimeImmutable $creationDate
	 */
	public function __construct(Url $website, BookmarkComment $comment, DateTimeImmutable $creationDate) {
		$this->website = $website;
		$this->comment = $comment;
		$this->creationDate = $creationDate;
	}

	/**
	 * @return Url
	 */
	public function getWebsite(): Url{
		return $this->website;
	}

	/**
	 * @return BookmarkComment
	 */
	public function getComment(): BookmarkComment{
		return $this->comment;
	}
}