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

?>

<?php foreach($this->data as $data) : ?>

<h1><?php echo $data->pro_name; ?></h1>

<?php endforeach;