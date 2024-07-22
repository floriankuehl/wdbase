<?php
defined('TYPO3') or die();

call_user_func(function()
{
  $extensionKey = 'rkbase';

  $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['wd'] = ['Fkwebdev\\Wdbase\\ViewHelpers'];

   /*
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
      $extensionKey,
      'setup',
      "@import 'EXT:rkbase/Configuration/TypoScript/setup.typoscript'"
   );
   */
});