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


class zarinjoominaViewplg extends JView
{
    function display($tpl = null)
      {
        
    
    $items=&$this->get('data');
    $this->assignRef('items',$items);
    $pagination =& $this->get('Pagination');    
    $this->assignRef('pagination', $pagination);   
        
       
        parent::display($tpl);
        
       
    }//function

}//class
