<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2017 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2015-2017
 * @author     Cliff Parnitzky
 * @package    TinyMceFontAwesome
 * @license    LGPL
 */

$arrLegends = explode(";", $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);
foreach($arrLegends as $legendKey=>$legend)
{
	$arrFields = explode(",", $legend);
	foreach ($arrFields as $fieldKey=>$field)
	{
		if ($field == "external")
		{
			$arrFields[$fieldKey] = $field . ',tinyMceFontAwesome';
		}
	}
	$arrLegends[$legendKey] = implode(",", $arrFields);
}
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = implode(";", $arrLegends);

$GLOBALS['TL_DCA']['tl_layout']['fields']['tinyMceFontAwesome'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['tinyMceFontAwesome'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class' => 'clr w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

?>
