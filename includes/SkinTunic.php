<?php
/**
 * SkinTemplate class for the Tunic skin
 *
 * @ingroup Skins
 */
class SkinTunic extends SkinTemplate {
	public $skinname = 'tunic',
		$stylename = 'Tunic',
		$template = 'TunicTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.tunic'
		] );
		$out->addModules( [
			'skins.tunic.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
