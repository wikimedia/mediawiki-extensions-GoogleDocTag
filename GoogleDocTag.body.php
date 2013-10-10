<?php

class GoogleDocTag {

	public static function setParserHook( Parser $parser ) {
		$parser->setHook( 'doc', 'GoogleDocTag::embedDoc' );
		$parser->setHook( 'googledoc', 'GoogleDocTag::embedDoc' );
		return true;
	}

	public static function embedDoc( $input, array $args, Parser $parser, PPFrame $frame ) {

		if ( ! array_key_exists( 'id', $args ) ) {
			return wfMessage( 'googledoctag-noid' )->text();
		}
		$id = $args['id'];

		$width = array_key_exists( 'width', $args ) ? $args['width'] : '100%';
		$height = array_key_exists( 'height', $args ) ? $args['height'] : '1000px';

		return '<iframe src="https://docs.google.com/document/d/' . $id . '" width="' . $width . '" height="' . $height . '" frameBorder="0"></iframe>';
	}
}