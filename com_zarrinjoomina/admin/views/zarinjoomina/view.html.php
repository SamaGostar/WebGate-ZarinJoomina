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


class zarinjoominaViewzarinjoomina extends JView
{
    function display($tpl = null)
      {JToolBarHelper::title(   JText::_( 'مدیریت زرین پال جومینا' ), JPATH_COMPONENT_ADMINISTRATOR.DS.'com_zarinjoomina'.DS.'assets/images/1.gif' );
        
        JToolBarHelper::deleteList("آیا شما مطمئن هستید می خواهید این کالا را حذف کنید","remove","حذف");
        JToolBarHelper::editListX($task = 'edit','ویرایش');
        JToolBarHelper::addNewX($task = 'add','جدید');
        
    
    $items=&$this->get('data');
    $this->assignRef('items',$items);
    $pagination =& $this->get('Pagination');    
    $this->assignRef('pagination', $pagination);   
        
        echo "<p style='direction: rtl;text-align: center;'>در صورت داشتن هر گونه پیشنهاد و یا انتقاد به سایت زیر مراجعه کنید.<br>
        <a href='http://barnamenevisan.ir'>www.barnamenevisan.ir</a></p>";
        parent::display($tpl);
        
        echo "<p style='direction: rtl;text-align: center;'>تمامی حقوق این محصول برای تیم جومینا و پدید آورنده آن  محفوظ است<br/>این نرم افزار رایگان نمی باشد</p>";
    }//function

}//class
