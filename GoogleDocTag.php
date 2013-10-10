<?php

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'GoogleDocTag',
	'descriptionmsg' => 'googledoctag-desc',
	'author'         => array( 'Reddo', 'Luis Felipe Schenone' ),
	'version'        => 0.3,
	'url'            => 'http://www.mediawiki.org/wiki/Extension:GoogleDocTag',
);

$wgExtensionMessagesFiles['GoogleDocTag'] = __DIR__ . '/GoogleDocTag.i18n.php';

$wgAutoloadClasses['GoogleDocTag'] = __DIR__ . '/GoogleDocTag.body.php';

$wgHooks['ParserFirstCallInit'][] = 'GoogleDocTag::setParserHook';