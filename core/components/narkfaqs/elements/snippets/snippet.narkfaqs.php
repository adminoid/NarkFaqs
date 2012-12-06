<?php
/**
 * @package narkfaqs
 */
$nf = $modx->getService('narkfaqs','NarkFaqs',$modx->getOption('narkfaqs.core_path',null,$modx->getOption('core_path').'components/narkfaqs/').'model/narkfaqs/',$scriptProperties);
if (!($nf instanceof NarkFaqs)) return '';

/* setup default properties */
$tpl = $modx->getOption('tpl',$scriptProperties,'rowTpl');
$sort = $modx->getOption('sort',$scriptProperties,'name');
$dir = $modx->getOption('dir',$scriptProperties,'ASC');

/* build query */
$c = $modx->newQuery('NarkFaq');
$c->sortby($sort,$dir);
$narkfaqs = $modx->getCollection('NarkFaq',$c);

/* iterate */
$output = '';
foreach ($narkfaqs as $narkfaq) {
    $narkfaqArray = $narkfaq->toArray();
    $output .= $nf->getChunk($tpl,$narkfaqArray);
}

return $output;