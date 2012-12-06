<?php
/**
 * Adds modActions and modMenus into package
 *
 * @package narkfaqs
 * @subpackage build
 */
$action= $modx->newObject('modAction');
$action->fromArray(array(
    'id' => 1,
    'namespace' => 'narkfaqs',
    'parent' => 0,
    'controller' => 'controllers/index',
    'haslayout' => true,
    'lang_topics' => 'narkfaqs:default',
    'assets' => '',
),'',true,true);

$menu= $modx->newObject('modMenu');
$menu->fromArray(array(
    'text' => 'narkfaqs',
    'parent' => 'components',
    'description' => 'narkfaqs.desc',
    'icon' => 'images/icons/plugin.gif',
    'menuindex' => 0,
    'params' => '',
    'handler' => '',
),'',true,true);
$menu->addOne($action);
unset($menus);

return $menu;