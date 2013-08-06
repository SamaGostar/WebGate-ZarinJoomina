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

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the zarinjoomina Component
 *
 * @package    zarinjoomina
 * @subpackage Views
 */
class zarinjoominaViewzarinjoomina extends JView
{
    /**
     * zarinjoomina view display method
     * @return void
     **/
    function display($tpl = null)
    {
        $data = $this->get('zarinjoomina');
        $this->assignRef('data', $data);

        parent::display($tpl);
    }//function

}//class

