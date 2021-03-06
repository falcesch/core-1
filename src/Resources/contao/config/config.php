<?php
/*
 * This file is part of Contao ThemeManager Core.
 *
 * (c) https://www.oveleon.de/
 */

// Add configuration dca for themes
$GLOBALS['BE_MOD']['design']['themes']['tables'][] = 'tl_thememanager';

// Add sources
$GLOBALS['TC_SOURCES'] = array(
    'configFiles' => ['bundles/contaothememanagercore/framework/scss/_config.scss'],
    'configField' => 'themeConfig',
    'files'       => [
        'bundles/contaothememanagercore/framework/scss/_grid.scss',
        'bundles/contaothememanagercore/framework/scss/_theme.scss'
    ]
);

// Add content element components group
array_insert($GLOBALS['TL_CTE'], 2, array
(
    'components' => array(),
    'componentLists' => array()
));

$GLOBALS['TL_HOOKS']['initializeSystem'][] = array('ContaoThemeManager\Core\ThemeManager', 'extendHeadlineField');
$GLOBALS['TL_HOOKS']['parseTemplate'][]    = array('ContaoThemeManager\Core\ThemeManager', 'addHeadlineFieldsToTemplate');
