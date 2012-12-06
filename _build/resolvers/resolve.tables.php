<?php
/**
 * Resolve creating custom db tables during install.
 *
 * @package narkfaqs
 * @subpackage build
 */
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;
            $modelPath = $modx->getOption('narkfaqs.core_path',null,$modx->getOption('core_path').'components/narkfaqs/').'model/';
            $modx->addPackage('narkfaqs',$modelPath);

            $manager = $modx->getManager();

            $manager->createObjectContainer('NarkFaq');

            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
    }
}
return true;