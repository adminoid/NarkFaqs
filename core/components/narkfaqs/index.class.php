<?php
/**
 * @package narkfaqs
 * @subpackage controllers
 */
require_once dirname(__FILE__) . '/model/narkfaqs/narkfaqs.class.php';
abstract class NarkFaqsManagerController extends modExtraManagerController {
    /** @var NarkFaqs $narkfaqs */
    public $narkfaqs;
    public function initialize() {
        $this->narkfaqs = new NarkFaqs($this->modx);

        $this->addCss($this->narkfaqs->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->narkfaqs->config['jsUrl'].'mgr/narkfaqs.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            NarkFaqs.config = '.$this->modx->toJSON($this->narkfaqs->config).';
        });
        </script>');
        return parent::initialize();
    }
    public function getLanguageTopics() {
        return array('narkfaqs:default');
    }
    public function checkPermissions() { return true;}
}
/**
 * @package narkfaqs
 * @subpackage controllers
 */
class IndexManagerController extends NarkFaqsManagerController {
    public static function getDefaultController() { return 'home'; }
}