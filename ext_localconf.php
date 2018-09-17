<?php
if (!defined ('TYPO3_MODE'))
    die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Qbus.' . $_EXTKEY,
    'Test',
    array(
        'Test' => 'main',

    ),
    // non-cacheable actions
    array(
        'Test' => 'main',
    )
);

// not working
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\GeorgRinger\News\Domain\Model\News::class] = \Qbus\ExtenderTest\Domain\Model\NewsDefault::class;

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)->registerImplementation(
    \GeorgRinger\News\Domain\Model\News::class,
    \Qbus\ExtenderTest\Domain\Model\NewsDefault::class
);
