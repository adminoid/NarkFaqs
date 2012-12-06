<?php
/**
 * @package narkfaqs
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_narkfaqs.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'rowTpl',
        'lexicon' => 'narkfaqs:properties',
    ),
    array(
        'name' => 'sort',
        'desc' => 'prop_narkfaqs.sort_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'narkfaqs:properties',
    ),
    array(
        'name' => 'dir',
        'desc' => 'prop_narkfaqs.dir_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'prop_narkfaqs.ascending','value' => 'ASC'),
            array('text' => 'prop_narkfaqs.descending','value' => 'DESC'),
        ),
        'value' => 'DESC',
        'lexicon' => 'narkfaqs:properties',
    ),
);
return $properties;