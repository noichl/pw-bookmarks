<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'bookmark' => '/Bookmark.php',
                'bookmarkcategory' => '/BookmarkCategory.php',
                'bookmarkcomment' => '/BookmarkComment.php',
                'bookmarkentry' => '/BookmarkEntry.php',
                'mailaddress' => '/MailAddress.php',
                'url' => '/Url.php',
                'user' => '/User.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
