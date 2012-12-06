<?php
/**
 * @package narkfaqs
 * @subpackage processors
 */
class NarkFaqCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'NarkFaq';
    public $languageTopics = array('narkfaqs:default');
    public $objectType = 'narkfaqs.narkfaq';

    public function beforeSave() {
        $question_author = $this->getProperty('question_author');

        if (empty($question_author)) {
            $this->addFieldError('question_author',$this->modx->lexicon('narkfaqs.narkfaq_err_ns_question_author'));
        }/* else if ($this->doesAlreadyExist(array('question_author' => $question_author))) {
            $this->addFieldError('question_author',$this->modx->lexicon('narkfaqs.narkfaq_err_ae'));
        }*/
        return parent::beforeSave();
    }
}
return 'NarkFaqCreateProcessor';