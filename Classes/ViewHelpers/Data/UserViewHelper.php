<?php

namespace Fkwebdev\Wdbase\ViewHelpers\Data;

use Closure;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class UserViewHelper extends AbstractViewHelper
{
  use CompileWithRenderStatic;

  public function initializeArguments(){
    // registerArgument($name, $type, $description, $required, $defaultValue, $escape)
    $this->registerArgument('as', 'string', 'Variable name', false, 'feUser');
  }

  public static function renderStatic(
    array $arguments,
    Closure $renderChildrenClosure,
    RenderingContextInterface $renderingContext
  ){
    $output = $renderChildrenClosure();
    //$context = GeneralUtility::makeInstance(Context::class);
    //$user = $context->getPropertyFromAspect('frontend.user', 'user');
    //$user = $userRepository->findByUid($userId);
    $user = $GLOBALS['TSFE']->fe_user->user;
    $renderingContext->getVariableProvider()->add($arguments['as'],$user);
    return $output;
  }
   
}