<?php
/**
 * SkinTemplate class for the Tunic skin
 *
 * @ingroup Skins
 */
class SkinTunic extends SkinMustache {
	public $template = 'TunicTemplate';

	/**
	 * @inheritDoc
	 */
	public function getTemplateData() {
		$data = parent::getTemplateData();
		$tpl = $this->prepareQuickTemplate();
		$tplData = $tpl->execute();
		return $data + $tplData + [
			'tunic-main-page-url' => self::makeMainPageUrl(),
		];
	}
}
