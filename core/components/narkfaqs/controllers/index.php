<?php
/**
 * @package narkfaqs
 * @subpackage controllers
 */
require_once dirname(dirname(__FILE__)).'/model/narkfaqs/narkfaqs.class.php';
$narkfaqs = new NarkFaqs($modx);
return $narkfaqs->initialize('mgr');