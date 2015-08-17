<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2015 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2015-2015
 * @author     Cliff Parnitzky
 * @package    TinyMceFontAwesome
 * @license    LGPL
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace TinyMceFontAwesome;

/**
* Class TinyMceFontAwesome
*
* Class to implement the HOOK for adding configs.
* @copyright  Cliff Parnitzky 2015-2015
* @author     Cliff Parnitzky
*/
class TinyMceFontAwesome {
	
	/**
	 * Adding config for output behavoir
	 */
	public function editTinyMcePluginLoaderConfig ($arrTinyConfig) {
		$contentCss = $arrTinyConfig["content_css"];
		if (strlen($contentCss) > 3)
		{
			// remove enclosing quotes and ending comma
			$contentCss = substr($contentCss, 1, strlen($contentCss) - 3);
			
			// add a comma
			$contentCss .= ',';
		}
		$contentCss .= $GLOBALS['TL_FONTAWESOME_CSS'];
		
		// put the value into the array
		
		$arrTinyConfig["content_css"] = '"' . $contentCss . '",';
		
		return $arrTinyConfig;
	}
	
	/**
	 * Add font-awesome css if defined in layout.
	 * 
	 * @param $objPage
	 * @param $objLayout
	 */
	public function hookGetPageLayout(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
	{
		if($objLayout->tinyMceFontAwesome) {
			$GLOBALS['TL_CSS']['TinyMceFontAwesome'] = $GLOBALS['TL_FONTAWESOME_CSS'];
		}
	}
	
	/**
	 * Add font-awesome css to the backend.
	 * 
	 * @param $objPage
	 * @param $objLayout
	 */
	public function hookLoadLanguageFile($strName, $strLanguage)
	{
		$GLOBALS['TL_CSS']['TinyMceFontAwesome'] = $GLOBALS['TL_FONTAWESOME_CSS'];
		
		// make sure the hook is only executed once
		unset($GLOBALS['TL_HOOKS']['loadLanguageFile']['TinyMceFontAwesomeHook']);
	}
}
 
?>