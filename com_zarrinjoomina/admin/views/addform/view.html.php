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
defined('_JEXEC') or die('=;)');

jimport('joomla.application.component.view');


class zarinjoominaViewaddform extends JView
{
    function display($tpl = null)
      {JToolBarHelper::title(   JText::_( 'مدیریت زرین پال جومینا' ), 'generic.png' );
        JToolBarHelper::save($task = 'save','ذخیره سازی');
        JToolBarHelper::cancel($task = 'cancel','انصراف');
        
    
    $items=&$this->get('data');
    $this->assignRef('items',$items);
        
        
        
        parent::display($tpl);
    }//function

}//class
