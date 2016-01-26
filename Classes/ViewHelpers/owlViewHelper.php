<?php
use \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
namespace CDG46\ews_gabarit\Classes\ViewHelper;

class owlViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	
	/**
	 * renders the carousel object
	 */
	
	function render(){
		$PageRenderer = TYPO3\CMS\Core\Page\PageRenderer::makeInstance('PageRenderer');
		
		$file = "owl.starter.js";
		$PageRenderer->addJsFooterFile($file);
	}
}
?>