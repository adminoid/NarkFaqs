<?php
/**
 * @package narkfaq
 * @subpackage processors
 */
class NarkFaqRemoveProcessor extends modObjectRemoveProcessor {
    public $classKey = 'NarkFaq';
    public $languageTopics = array('narkfaqs:default');
    public $objectType = 'narkfaqs.narkfaq';
}
return 'NarkFaqRemoveProcessor';