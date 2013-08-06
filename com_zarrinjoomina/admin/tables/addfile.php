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

/**
 * zarinjoomina Table class
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class Tableaddform extends JTable
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
	var $pro_name   = null;
    var $pro_price  = null;
    var $pro_l_price=null;
	var $pro_des    =null;
    var $pro_various=null;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function Tableaddform(& $db) {
		parent::__construct('#__zarinpal','id', $db);
	}
}