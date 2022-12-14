<?php 

import('lib.pkp.classes.handler.Handler');

class CorrigeurlPluginHandler extends Handler {
	public function index($args, $request) {
        

		$plugin = PluginRegistry::getPlugin('generic', 'corrigeurl');
        $templateMgr = TemplateManager::getManager($request);
        return $templateMgr->display($plugin->getTemplateResource('corrigeurl.tpl'));
  }
}
