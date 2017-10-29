<?php

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'GoogleDocTag',
	'descriptionmsg' => 'googledoctag-desc',
	'author'         => array( 'Reddo', 'Luis Felipe Schenone' ),
	'version'        => '0.4.0',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:GoogleDocTag',
);

$wgMessagesDirs['GoogleDocTag'] = __DIR__ . '/i18n';

$wgAutoloadClasses['GoogleDocTag'] = __DIR__ . '/GoogleDocTag.body.php';

$wgHooks['ParserFirstCallInit'][] = 'GoogleDocTag::setParserHook';
