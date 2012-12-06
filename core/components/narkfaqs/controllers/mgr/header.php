<?php
/**
 * Loads the header for mgr pages.
 *
 * @package narkfaqs
 * @subpackage controllers
 */
$modx->regClientStartupScript($narkfaqs->config['jsUrl'].'mgr/narkfaqs.js');
$modx->regClientStartupHTMLBlock('<script type="text/javascript">
Ext.onReady(function() {
    NarkFaqs.config = '.$modx->toJSON($narkfaqs->config).';
});
</script>');


return '';