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

jimport('joomla.application.component.controller');


class zarinjoominaControllerzarinjoomina extends zarinjoominaController
{     
    



   function __construct()
   {
      parent::__construct();



   
   }

   /**
    * display the edit form
    * @return void
    */
    function plg()
   {
      JRequest::setVar( 'view', 'plg' );
      JRequest::setVar( 'model', 'zarinjoomina' );
      JRequest::setVar( 'layout', 'list'  );
      JRequest::setVar('hidemainmenu', 1);

      parent::display();
   }
   function edit()
   {
      JRequest::setVar( 'view', 'editform' );
      JRequest::setVar( 'layout', 'form'  );
      JRequest::setVar('hidemainmenu', 1);

      parent::display();
   }


   function add()
   {
      JRequest::setVar( 'view', 'addform' );
      JRequest::setVar( 'layout', 'form'  );
      JRequest::setVar('hidemainmenu', 1);

      parent::display();
   }

   function save()
   {
      $model = $this->getModel('editform');

      if ($model->store($post)) {
         $msg = JText::_( 'اطلاعات ذخیره شد' );
      } else {
         $msg = JText::_( 'خطا در ذخیره اطلاعات' );
      }



      $link = 'index.php?option=com_zarinjoomina';
      $this->setRedirect($link, $msg);
   }





   function remove()
   {
      $model = $this->getModel('editform');
      if(!$model->delete()) {
         $msg = JText::_( 'Error: One or More Greetings Could not be Deleted' );
      } else {
         $msg = JText::_( 'Greeting(s) Deleted' );
      }

      $this->setRedirect( 'index.php?option=com_zarinjoomina', $msg );
   }

   /**
    * cancel editing a record
    * @return void
    */
   function cancel()
   {
      $msg = JText::_( 'عملیات انصراف با موفقیت انجام شد' );
      $this->setRedirect( 'index.php?option=com_zarinjoomina', $msg );
   }
}//class