<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2016 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2015-2016
 * @author     Cliff Parnitzky
 * @package    TinyMceFontAwesome
 * @license    LGPL
 */

require_once(TL_ROOT . '/system/config/fontawesome.php');

// Adding plugin
$GLOBALS['TINY_PLUGINS']['TinyMceFontAwesome'] = 'fontawesome';

// Adding buttons
$GLOBALS['TINY_BUTTONS_2']['TinyMceFontAwesome'] = 'fontawesome | ';

// Adding HOOK to define more special config
$GLOBALS['TL_HOOKS']['editTinyMcePluginLoaderConfig'][] = array('TinyMceFontAwesome', 'editTinyMcePluginLoaderConfig');
// Adding HOOK to add font-awesome css to layout
$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('TinyMceFontAwesome', 'hookGetPageLayout');

// Adding HOOK to add font-awesome css to backend
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_HOOKS']['loadLanguageFile']['TinyMceFontAwesomeHook'] = array('TinyMceFontAwesome', 'hookLoadLanguageFile');
}

// Defining the url to FontAwesome CSS file
$GLOBALS['TL_FONTAWESOME_CSS'] = '//netdna.bootstrapcdn.com/font-awesome/' . TINYMCE_FONTAWESOME . '/css/font-awesome.min.css';

?>