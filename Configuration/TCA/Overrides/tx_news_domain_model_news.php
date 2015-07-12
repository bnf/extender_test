<?php
if (!defined ('TYPO3_MODE'))
	die ('Access denied.');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns("tx_news_domain_model_news", array(
	'test_property' => array(
		'exclude' => 1,
		'label' => 'Test Property',
		'config' => array(
			'type' => 'text',
			'cols' => 60,
			'rows' => 5,
		)
	),
));

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes("tx_news_domain_model_news", "test_property;;;;1-1-1", '', 'after:teaser');
