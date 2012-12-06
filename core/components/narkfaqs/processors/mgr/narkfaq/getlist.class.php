<?php
/**
 * Get a list of NarkFaqs
 *
 * @package narkfaqs
 * @subpackage processors
 */
//die('asfdasdf');
class NarkFaqGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'NarkFaq';
    public $languageTopics = array('narkfaqs:default');
    public $defaultSortField = 'createdon';
    public $defaultSortDirection = 'DESC';
    public $objectType = 'narkfaqs.narkfaq';

    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $query = $this->getProperty('query');
        if (!empty($query)) {
            $c->where(array(
                'question_header:LIKE' => '%'.$query.'%',
                'OR:question_text:LIKE' => '%'.$query.'%',
                'OR:answer_text:LIKE' => '%'.$query.'%',
            ));
        }
        return $c;
    }
}
return 'NarkFaqGetListProcessor';