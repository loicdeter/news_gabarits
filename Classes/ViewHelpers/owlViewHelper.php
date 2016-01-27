<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2016 Loïc de Terwangne <loic.deterwangne@gmail.com>
*  All rights reserved
*
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

namespace CDG46\ews_gabarit\Classes\ViewHelper;
use \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class 
 * 
 * @author Loïc de Terwangne <loic.deterwangne@gmail.com>
 * @package ViewHelpers
 */
class owlViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * renders the carousel
     */
    public function render(){
        $PageRenderer = TYPO3\CMS\Core\Page\PageRenderer::makeInstance('PageRenderer');

        $file = "owl.starter.js";
        $PageRenderer->addJsFooterFile($file);
    }
}
?>