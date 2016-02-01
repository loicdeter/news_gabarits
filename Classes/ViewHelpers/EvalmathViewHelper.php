<?php
namespace CDG46\NewsGabarits\ViewHelpers;

/***************************************************************
  *  Copyright notice
  *
  *  (c) 2010 Braulio José Solano Rojas <braulio at solsoft.biz>, Solsoft 
de Costa Rica S.A.
  *
  *  All rights reserved
  *
  *  This script is free software; you can redistribute it and/or modify
  *  it under the terms of the GNU Lesser General Public License as
  *  published by the Free Software Foundation; either version 3 of the
  *  License, or (at your option) any later version.
  *
  *  The GNU General Public License can be found at
  *  http://www.gnu.org/licenses/lgpl.html.
  *
  *  This script is distributed in the hope that it will be useful,
  *  but WITHOUT ANY WARRANTY; without even the implied warranty of
  *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *  GNU General Public License for more details.
  *
  *  This copyright notice MUST APPEAR in all copies of the script!
  ***************************************************************/
  
/**
  * Evaluates a String as mathematical expression.
  * @see http://www.twmagic.com/
  *
  * = Examples =
  *
  * <code title="Defaults">
  * <solsoft:evalmath>5+1</solsoft:evalmath>
  * </code>
  *
  *
  * @version $Id: $
  * @package News
  * @subpackage ViewHelpers\Evalmath
  * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
  */
class evalmathViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Evaluates a String as a mathematical expression.
     *
     * @author Braulio J. Solano-Rojas <braulio at solsoft.biz>
     * @see http://lists.typo3.org/pipermail/typo3-project-typo3v4mvc/2011-February/008414.html
     */
	public function render() {
		$stringToEval = $this->renderChildren();
		$m = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('EvalMath');
		// basic evaluation:
		return $m->evaluate($stringToEval);
	}
}