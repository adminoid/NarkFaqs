<?php
/**
 * Loads the home page.
 *
 * @package narkfaqs
 * @subpackage controllers
 */
$modx->regClientStartupScript($narkfaqs->config['jsUrl'].'mgr/widgets/narkfaqs.grid.js');
$modx->regClientStartupScript($narkfaqs->config['jsUrl'].'mgr/widgets/home.panel.js');
$modx->regClientStartupScript($narkfaqs->config['jsUrl'].'mgr/sections/index.js');

$output = '<div id="narkfaqs-panel-home-div"></div>';

return $output;
