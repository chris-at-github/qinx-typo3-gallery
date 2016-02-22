<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Qinx.' . $_EXTKEY,
	'Pi1',
	array(
		'Category' => 'index, properties',
		'Image' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Category' => 'index',
		'Image' => '',
	)
);
