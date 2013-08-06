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

jimport('joomla.application.component.model');

class zarinjoominaModelplg extends JModel
        {
            
            var $_data;
            function _buildquery()
                {
                    
                    $query='select * from #__zarinpal';
                    return $query;
                }
            
            
            function getdata()
                {
                 if(empty($this->_data))   
                    {$query=$this->_buildquery();
                    
                    $this->_data=$this->_getList($query);
                    }
                    
                    
                    return $this->_data;                    
                }
            
            
            
            
           

    /**
     * Items total
     * @var integer
     */
    var $_total = null;
  function getTotal()
    {
        //-- Load the content if it doesn't already exist
        if(empty($this->_total))
        {
            $query = $this->_buildQuery();
            $this->_total = $this->_getListCount($query);
        }

        return $this->_total;
    }//function

    function getPagination()
    {
        //-- Load the content if it doesn't already exist
        if(empty($this->_pagination))
        {
            jimport('joomla.html.pagination');
            $this->_pagination = new JPagination($this->getTotal(), $this->getState('limitstart'), $this->getState('limit'));
        }

        return $this->_pagination;
    }//function            
            
        }
        
        