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
 // no direct access
defined('_JEXEC') or die('Restricted access');
jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');  
$db = JFactory::getDBO(); 


$query="drop table if exists `#__zarinpal`;";
$db->setQuery($query);
$query="
DROP TABLE `#__zarinpal_c`;

";
$db->setQuery($query);