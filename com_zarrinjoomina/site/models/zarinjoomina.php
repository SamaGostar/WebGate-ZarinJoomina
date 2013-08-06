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

jimport( 'joomla.application.component.model' );

/**
 * zarinjoomina Model
 *
 * @package    zarinjoomina
 * @subpackage Models
 */
class zarinjoominaModelzarinjoomina extends JModel
{
    /**
     * Gets the greetings
     * @return string The greeting to be displayed to the user
     */
    function getzarinjoomina()
    {
        $db =& JFactory::getDBO();

        $query = 'SELECT * FROM #__zarinpal';
        $db->setQuery($query);
        $data = $db->loadObjectList();

        return $data;
    }//function

}//class

