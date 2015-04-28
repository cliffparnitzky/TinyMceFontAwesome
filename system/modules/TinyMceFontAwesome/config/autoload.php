<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package TinyMceFontAwesome
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'TinyMceFontAwesome',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'TinyMceFontAwesome\TinyMceFontAwesome' => 'system/modules/TinyMceFontAwesome/classes/TinyMceFontAwesome.php',
));
