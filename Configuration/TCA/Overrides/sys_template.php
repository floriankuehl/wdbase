<?php
defined('TYPO3') or die();

(function(){
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
      'wdbase',
      'Configuration/TypoScript',
      'WDBase Template'
   );
})();
