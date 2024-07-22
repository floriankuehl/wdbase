<?php
defined('TYPO3') or die();

(function(){
   $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['wd'] = ['Fkwebdev\\Wdbase\\ViewHelpers'];
   /*
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
      'wdbase',
      'setup',
      "@import 'EXT:rkbase/Configuration/TypoScript/setup.typoscript'"
   );
   */
})();
