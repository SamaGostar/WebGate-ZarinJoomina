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

<form  dir="rtl" action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Details' ); ?></legend>

		<table class="acc_number">
		<tr>
			<td width="100" align="right" class="key">
				<label for="greeting">
					<?php echo JText::_( 'شماره حساب زرین پال' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="acc_number" id="acc_number" size="32" maxlength="300" value="<?php echo $this->items->acc_number;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="per_zarin">
					<?php echo JText::_( 'درصد زرین پال' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="per_zarin" id="per_zarin" size="32" maxlength="300" value="<?php echo $this->items->per_zarin;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="per_maliat">
					<?php echo JText::_( 'درصد مالیات' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="per_maliat" id="per_maliat" size="32" maxlength="300" value="<?php echo $this->items->per_maliat;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="sendprice">
					<?php echo JText::_( 'هزینه ارسال' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="sendprice" id="sendprice" size="32" maxlength="300" value="<?php echo $this->items->sendprice;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="szarinpalprice">
					<?php echo JText::_( 'وضعیت نمایش درصد زرین پال' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="szarinpalprice" id="szarinpalprice" size="32" maxlength="300" value="<?php echo $this->items->szarinpalprice;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="smaliatprice">
					<?php echo JText::_( 'وضعیت نمایش درصد مالیات' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="smaliatprice" id="smaliatprice" size="32" maxlength="300" value="<?php echo $this->items->smaliatprice;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="ssenprice">
					<?php echo JText::_( 'وضعیت نمایش هزینه ارسال' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="ssenprice" id="ssenprice" size="32" maxlength="300" value="<?php echo $this->items->ssenprice;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="stotalpris">
					<?php echo JText::_( 'وضعیت نمایش کل مبلغ قابل پرداخت' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="stotalpris" id="stotalpris" size="32" maxlength="300" value="<?php echo $this->items->stotalpris;?>" />
			</td>
		</tr>
        <tr>
			<td width="100" align="right" class="key">
				<label for="redirect_link">
					<?php echo JText::_( 'لینک بازگشت' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="redirect_link" id="redirect_link" size="32" maxlength="300" value="<?php echo $this->items->redirect_link;?>" />
			</td>
		</tr>        
	</table>
	</fieldset>
</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_zarinjoomina" />
<input type="hidden" name="id" value="<?php echo $this->items->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="config" />
</form>
