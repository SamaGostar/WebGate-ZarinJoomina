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

defined('_JEXEC') or die('Restricted access'); ?>

<form dir="rtl" action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'جزئیات' ); ?></legend>

		<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
				<label for="pro_name">
					<?php echo JText::_( 'نام کالا' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="pro_name" id="pro_name" size="32" maxlength="300" value="" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="pro_price">
					<?php echo JText::_( 'قیمت کالا' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="pro_price" id="pro_price" size="32" maxlength="300" value="" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="pro_l_price">
					<?php echo JText::_( 'قیمت قبلی' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="pro_l_price" id="pro_l_price" size="32" maxlength="300" value="" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="pro_des">
					<?php echo JText::_( 'توضیحات' ); ?>:
				</label>
			</td>
			<td>
				<textarea class="text_area" type="text" name="pro_des" id="pro_des" size="32" maxlength="300"  /></textarea>
			</td>
		</tr>
         <tr>
			<td width="100" align="right" class="key">
				<label for="pro_various">
					<?php echo JText::_( 'موجودی در انبار' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="pro_various" id="$pro_various" size="32" maxlength="300"  />
			</td>
		</tr>
	</table>
	</fieldset>
</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_zarinjoomina" />
<input type="hidden" name="id" value="<?php echo $this->items->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="zarinjoomina" />
</form>
