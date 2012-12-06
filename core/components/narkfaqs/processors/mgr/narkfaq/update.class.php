<?php
/**
 * @package narkfaq
 * @subpackage processors
 */
class NarkFaqUpdateProcessor extends modObjectUpdateProcessor {
    public $classKey = 'NarkFaq';
    public $languageTopics = array('narkfaqs:default');
    public $objectType = 'narkfaqs.narkfaq';
}
return 'NarkFaqUpdateProcessor';