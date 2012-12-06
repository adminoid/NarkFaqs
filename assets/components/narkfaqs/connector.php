<?php
/**
 * NarkFaqs Connector
 *
 * @package narkfaqs
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('narkfaqs.core_path',null,$modx->getOption('core_path').'components/narkfaqs/');
require_once $corePath.'model/narkfaqs/narkfaqs.class.php';
$modx->narkfaqs = new NarkFaqs($modx);

$modx->lexicon->load('narkfaqs:default');

/* handle request */
$path = $modx->getOption('processorsPath',$modx->narkfaqs->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));