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

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class Tableconfig extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	/**
	 * @var string
	 */
     var $acc_number=null;
	var $per_zarin  = null;
    var $per_maliat=null;
	var $sendprice    =null;
    var $szarinpalprice   = null;
    var $smaliatprice  = null;
    var $ssenprice=null;
	var $stotalpris    =null;
    var $redirect_link   = null;
   
    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function Tableconfig(& $db) {
		parent::__construct('#__zarinpal_c','id', $db);
	}
}