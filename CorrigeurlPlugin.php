

<?php
import('lib.pkp.classes.plugins.GenericPlugin');


class CorrigeurlPlugin extends GenericPlugin {
	public function register($category, $path, $mainContextId = NULL) {

    $success = parent::register($category, $path, $mainContextId);
    if ($success && $this->getEnabled()) {
        HookRegistry::register('LoadHandler', array($this, 'setPageHandler'));
    }
    return $success;
	}

  /**
   * Provide a name for this plugin
   *
   * The name will appear in the plugins list where editors can
   * enable and disable plugins.
   */
	public function getDisplayName() {
		return 'Corrige URL plugin';
	}

	/**
   * Provide a description for this plugin
   *
   * The description will appear in the plugins list where editors can
   * enable and disable plugins.
   */
	public function getDescription() {
		return 'Corrige URL plugin';
	}

    public function setPageHandler($hookName, $params) {
		// 0.0.0.0:8888/index.php/index/nomerevista/article/view/193838/arquivo_ptbr.pdf
        $nomedarevista = $params[0];
        $article = $params[1];
        $view = $params[2];
        $numero = $params[3];
        $pdf = $params[4];

        
        // Existe a revista? usnado DaoRegistry procuramos $nomedarevista
        // Existe o artigo; procurar o $numero com DaoRegistry

        //die('essa página existe');
        
     

		if ($nomedarevista === 'nomerevista') {
  
            header('Location: http://0.0.0.0:8888');
            exit;
            
			return true;
		}
		return false;
	}
}
