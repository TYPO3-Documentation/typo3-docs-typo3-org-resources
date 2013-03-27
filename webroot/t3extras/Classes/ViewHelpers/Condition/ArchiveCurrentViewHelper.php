<?php

/*
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * 
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @author Christian Zenker <christian.zenker@599media.de>
 */
class Tx_T3orgTemplate_ViewHelpers_Condition_ArchiveCurrentViewHelper  extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * @param string $now
	 * @author Christian Zenker <christian.zenker@599media.de>
	 */
	public function render($now) {
		$get = t3lib_div::_GP('tx_czsimplecal_pi1');
		
		$getDate = $get['getDate'] ? strtotime($get['getDate']) : time();
		$now = strtotime($now);
		
		return date('Y', $getDate) === date('Y', $now);
	}
	
}
?>