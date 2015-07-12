<?php
if (!defined ('TYPO3_MODE'))
	die ('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['news']['extender']['News'][$_EXTKEY] =
	        'EXT:' . $_EXTKEY . '/Classes/Domain/Model/News.php';
