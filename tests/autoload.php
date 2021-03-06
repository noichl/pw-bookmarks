<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'bookmarkcategorytest' => '/BookmarkCategoryTest.php',
                'bookmarkcommenttest' => '/BookmarkCommentTest.php',
                'bookmarkentrycollectiontest' => '/BookmarkEntryCollectionTest.php',
                'bookmarkentrytest' => '/BookmarkEntryTest.php',
                'bookmarktest' => '/BookmarkTest.php',
                'mailaddresstest' => '/MailAddressTest.php',
                'simplemockstrait' => '/SimpleMocksTrait.php',
                'urltest' => '/UrlTest.php',
                'usertest' => '/UserTest.php'
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
