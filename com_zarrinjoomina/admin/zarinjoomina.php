<?php
/**
 * @version    $$andspvhjr
 * @package    zarinjoomina
 * @subpackage Base
 * @author     EasyJoomla {@link http://barnamenevisan.ir}
 * @author     vahid hajipour {@vahidhajipour}
 * @author     Created on 24-Apr-2011
 * @license    GNU/GPL
 */

//-- No direct access
defined('_JEXEC') or die('=;)');

/**
 *  Require the base controller.
 */
require_once JPATH_COMPONENT.DS.'controller.php';

if($controller = JRequest::getWord('controller'))
{
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';

    if( file_exists($path))
    {
        /**
         * Require specific controller if requested.
         */
        require_once $path;
    }
    else
    {
        $controller = '';
    }
}

//-- Create the controller
$classname = 'zarinjoominaController'.$controller;
$controller = new $classname();

//-- Perform the Request task
$controller->execute(JRequest::getWord('task'));

//-- Redirect if set by the controller
$controller->redirect();
