<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'GoogleDocTag' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['GoogleDocTag'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the GoogleDocTag extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the GoogleDocTag extension requires MediaWiki 1.29+' );
}
